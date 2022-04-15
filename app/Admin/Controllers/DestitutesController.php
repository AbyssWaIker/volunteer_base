<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Destitute\DestituteHelper;
use App\Admin\Exporters\DestituteExporter;
use App\Models\Destitute;
use Carbon\Carbon;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\Eloquent\Builder;
use App\Admin\Helpers\GridHelper;
use App\Rules\UniquenesForDestitute;

class DestitutesController extends PersonController
{
    protected $model = Destitute::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Нуждающиеся';

    protected function quickCreateCallback(): callable
    {
        return function (Grid\Tools\QuickCreate $form) {
            $form->multipleSelect('categories[]', __('categories'))
                ->options($this->getAllCategories())
                ->default(Destitute::REFUGEE_ID)
                ->value(Destitute::REFUGEE_ID);
            ;
            $form->text('name', __('name'))->required();
            $form->text('phone', __('phone'));
            $form->text('passport_id', __('passport_id'));
            $form->text('address', __('address'));
            $form->text('id_code', __('id_code'));
            $form->text('comment', __('comment'));
        };
    }
    protected function filterCallBack(): callable
    {
        return function(Grid\Filter $filter) {
            parent::filterCallBack()($filter);
            $filter->where(function(Builder $query) {
                $query->whereHas('helpGiven', function (Builder $query) {
                    $query->whereDate('hg_timestamp', $this->input);
                });
            }, 'Дата', 'date')->date();
        };
    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = parent::grid();
        $grid->model()->with(['categories', 'helpGiven']);

        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->prepend(new DestituteHelper);
        });

        $grid->exporter(new DestituteExporter($grid, $this->getModel(), $this->title));

        $grid->column('phone', __('phone'))->editable()->filter('like')->hideOnMobile();
        $grid->column('passport_id', __('passport_id'))->editable()->filter('like')->hideOnMobile();
        $grid->column('address', __('address'))->editable()->filter('like')->hideOnMobile();
        $grid->column('id_code', __('id_code'))->editable()->filter('like')->hideOnMobile();
        $grid->column('familyMembersCount',__('family_members'))
            ->display(function ($test) {return$this->familyMembersCount;})
            ->expand(function ($destitute) {
                $all_family = array_merge(
                    [$this->attributesToArray()],
                    $destitute->family_members ?: []
                );
                return GridHelper::arrayToList($all_family, function(?array $member){
                    if(!$member) {
                        return '';
                    }
                    return @$member['name'] . ' ' . @$member['phone'] . ' ' . @$member['passport_id'] . ' ' . @$member['comment'];
                });
            })
            ->hideOnMobile();
        $grid->column('comment', __('comment'))->editable()->hideOnMobile();
        $grid->column('helpGiven',  __('Receivings'))
            ->display(function (array $help) {return ($this->getModel())::getHelpHistory($help);})
            ->hideOnMobile();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = parent::detail($id);

        $show->field('id', __('Id'));
        $show->field('last_name', __('Last Name'));
        $show->field('first_name', __('First Name'));
        $show->field('middle_name', __('Middle Name'));
        $show->field('address', __('address'));
        $show->field('passport_id', __('passport_id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = 0): Form
    {
        $form = parent::form($id);

        $validator = $this->formValidator($id);

        $form->multipleSelect('categories', __('categories'))->options($this->getAllCategories())->default([Destitute::REFUGEE_ID]);
        $form->text('name', __('name'))->required();
        $form->text('phone', __('phone'))->creationRules([new UniquenesForDestitute]);
        $form->text('passport_id', __('passport_id'))->creationRules([new UniquenesForDestitute]);
        $form->text('address', __('address'));
        $form->text('id_code', __('id_code'));
        $form->text('comment', __('comment'));
        $form->table('family_members', __('family_members'), function(\Encore\Admin\Form\NestedForm $form) {
            $form->text('name',__('name'))->required();
            $form->text('passport_id', __('passport_id'))->creationRules([new UniquenesForDestitute]);
            $form->text('phone', __('phone'))->creationRules([new UniquenesForDestitute]);
            $form->text('comment', __('comment'));
        });
        $form->hasMany('helpGiven', 'Получила гуманитарную помощь', function(\Encore\Admin\Form\NestedForm $form){
            $form->hidden('id');
            $form->date('hg_timestamp', 'Время')->default(Carbon::now());
        });

        return $form;
    }
}
