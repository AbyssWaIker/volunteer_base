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

class DestitutesController extends AdminController
{
    protected $model = Destitute::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Нуждающиеся';

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
        $grid->quickCreate(function (Grid\Tools\QuickCreate $form) {
            $form->text('name', __('Full name'))->required();
            $form->text('passport_id', __('Passport id'));
            $form->text('phone', __('Phone'));
            $form->text('address', __('Address'));
            $form->multipleSelect('categories[]', __('Category'))
                ->options(DestituteCategory::pluckNameAndID());
            $form->text('comment', __('Comment'));
        });
        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->prepend(new DestituteHelper);
        });
        $grid->filter(function(Grid\Filter $filter) {
            $filter->disableIdFilter();
            $filter->where(function(Builder $query) {
                $query->whereHas('helpGiven', function (Builder $query) {
                    $query->whereDate('hg_timestamp', $this->input);
                });
            }, 'Дата', 'date')->date();

            $filter->where(function(Builder $query) {
                $query->whereHas('categories', function (Builder $query) {
                    $table = (new DestituteCategory)->getTable();
                    $query->whereIn("$table.id", $this->input);
                });
            }, 'Категории', 'categories')
                ->multipleSelect(DestituteCategory::pluckNameAndID());
        });
        $grid->exporter(new DestituteExporter($grid, $this->title));

        $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('Full name'))->filter('like');
        $grid->column('address', __('Address'))->filter('like');
        $grid->column('phone', __('Phone'))->filter('like');
        $grid->column('passport_id', __('Passport id'))->filter('like');
        $grid->column('categories', __('Category'))->customMultipleSelect(DestituteCategory::pluckNameAndID());
        $grid->column('helpGiven',  __('Receivings'))->display(function (array $help) {return Destitute::getHelpHistory($help);});
        $grid->column('comment', __('Comment'));

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
        $show->field('last_name', __('Last name'));
        $show->field('first_name', __('First name'));
        $show->field('middle_name', __('Middle name'));
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

        $form->text('name', __('Full name'))->required();
        $form->text('phone', __('Phone'));
        $form->text('address', __('Address'));
        $form->text('passport_id', __('Passport id'));
        $form->year('year_of_birth', __('Year of birth'));
        $form->text('comment', __('Comment'));
        $form->multipleSelect('categories', __('Category'))->options(DestituteCategory::pluckNameAndID());
        $form->hasMany('helpGiven', 'Получила гуманитарную помощь', function(\Encore\Admin\Form\NestedForm $form){
            $form->hidden('id');
            $form->date('hg_timestamp', 'Время')->default(Carbon::now());
        });

        return $form;
    }
}
