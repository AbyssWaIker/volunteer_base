<?php

namespace App\Admin\Controllers;

use App\Admin\Exporters\ModelExporter;
use App\Admin\Helpers\ValidatorHelper;
use App\Models\Model;
use App\Models\Person;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\Eloquent\Builder;

abstract class PersonController extends ModelController
{
    protected $model = Person::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Человек';

    protected function getModel():Model
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
    protected function grid():Grid
    {
        $grid = parent::grid();

        $grid->column('id', __('Id'))->sortable()->hideOnMobile();
        $grid->column('categories', __('categories'))->customMultipleSelect($this->getAllCategories())->hideOnMobile();
        $grid->column('name', __('name'))->filter('like')->editable()->hideOnMobile();
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id):Show
    {
        $show = parent::detail($id);

        $show->field('id', __('Id'));
        $show->field('name', __('name'));
        $show->field('phone', __('phone'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }
}
