<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Destitute\DestituteHelper;
use App\Admin\Exporters\CategoryExporter;
use App\Admin\Exporters\DestituteExporter;
use App\Admin\Exporters\PeopleWithCategoriesExporter;
use App\Models\Destitute;
use App\Models\DestituteCategory;
use Carbon\Carbon;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\Eloquent\Builder;

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
            parent::quickCreateCallback()($form);
            $form->text('passport_id', __('Passport id'));
            $form->text('address', __('Address'));
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
        $grid->model()->with(['categories', 'helpGiven'])->orderByDesc('id');
        $grid->quickSearch(['name', 'address', 'phone', 'passport_id', 'comment']);

        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->prepend(new DestituteHelper);
        });

        $grid->exporter(new DestituteExporter($grid, $this->title));

        $grid->column('id', __('Id'))->sortable();

        $grid->column('address', __('Address'))->filter('like')->hideOnMobile();
        $grid->column('passport_id', __('Passport id'))->filter('like')->hideOnMobile();
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
        $show->field('address', __('Address'));
        $show->field('passport_id', __('Passport id'));
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
        $form->text('address', __('Address'));
        $form->text('passport_id', __('Passport id'))
            ->rules("nullable|sometimes|unique:{$this->getModel()->getTable()}",['unique' => __('Passport ID is Taken')]);
        $form->multipleSelect('categories', __('Category'))->options($this->getAllCategories());
        $form->hasMany('helpGiven', 'Получила гуманитарную помощь', function(\Encore\Admin\Form\NestedForm $form){
            $form->hidden('id');
            $form->date('hg_timestamp', 'Время')->default(Carbon::now());
        });

        return $form;
    }
}
