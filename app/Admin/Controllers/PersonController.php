<?php

namespace App\Admin\Controllers;

use App\Admin\Exporters\VolunteerExporter;
use App\Admin\Helpers\ValidatorHelper;
use App\Models\Person;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\Eloquent\Builder;

abstract class PersonController extends AdminController
{
    protected $model = Person::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Человек';

    protected function getModel():Person
    {
        return new $this->model;
    }
    protected function getAllCategories():array
    {
        return ($this->getModel()->category_class)::pluckNameAndID();
    }

    protected function quickCreateCallback():callable
    {
        return function (Grid\Tools\QuickCreate $form) {
            $form->multipleSelect('categories[]', __('categories'))->options($this->getAllCategories());
            $form->text('name', __('name'))->required();
            $form->text('phone', __('phone'));
            $form->text('comment', __('comment'));
        };
    }
    protected function filterCallBack():callable
    {
        $model = ($this->getModel());
        $table = (new $model->category_class)->getTable();
        return function(Grid\Filter $filter) use($table) {
            $filter->disableIdFilter();
            $filter->column(1/2, function (Grid\Filter $filter) {
                $filter->like('name', __('Name'));
                $filter->like('phone', __('phone'));
            });
            $filter->column(1/2, function (Grid\Filter $filter) use($table) {
                $filter->where(function(Builder $query) use($table) {
                    $query->whereHas('categories', function (Builder $query) use ($table) {
                        $query->whereIn("$table.id", $this->input);
                    });
                }, 'Категории', 'categories')
                    ->multipleSelect($this->getAllCategories());
            });
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
        $grid->model()->with(['categories'])->orderByDesc('id');
        $model = $this->getModel();
        $grid->quickSearch($model->getFillable());
        $grid->quickCreate($this->quickCreateCallback());
        $grid->filter($this->filterCallBack());
        $grid->exporter(new VolunteerExporter($grid,$this->getModel(), $this->title));

        $grid->column('tableInfo', __('Info'))
            ->display(function (){return [$this->tableInfo];})
            ->verticalTable($model::getTableTitles())
            ->hideOnDesktop();

        $grid->column('id', __('Id'))->sortable()->hideOnMobile();
        $grid->column('name', __('name'))->filter('like')->hideOnMobile();
        $grid->column('phone', __('phone'))->filter('like')->hideOnMobile();
        $grid->column('categories', __('categories'))->customMultipleSelect($this->getAllCategories())->hideOnMobile();
        $grid->column('comment', __('comment'))->hideOnMobile();
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
        $show->field('name', __('Last Name'));
        $show->field('phone', __('phone'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function formValidator($id):callable
    {
        $model = $this->getModel();
        $table = $model->getTable();
        return function(string $column)use($table,$id){return ValidatorHelper::validatorUnique($table);};
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
        $form->text('name', __('name'))
            ->required();
        $form->text('phone', __('phone'))
            ->creationRules($validator('phone'));
        $form->multipleSelect('categories', __('categories'))->options($this->getAllCategories());
        $form->text('comment', __('comment'));

        return $form;
    }
}
