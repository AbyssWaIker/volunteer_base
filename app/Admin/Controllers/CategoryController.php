<?php

namespace App\Admin\Controllers;

use App\Admin\Exporters\CategoryExporter;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Tools\QuickCreate;
use Encore\Admin\Show;

abstract class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Категории';
    protected $model;
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = parent::grid();
        $grid->actions(function (Actions $actions) {
            $actions->disableEdit();
        })
        $grid->disableCreateButton();
        $grid->disableFilter();
        $grid->quickSearch('name');

        $grid->exporter(new CategoryExporter);
        $grid->quickCreate(function (QuickCreate $form) {
            $form->text('name', __('Name'));
        });
        $grid->column('name', __('Name'))->sortable()->editable();


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

        $show->field('name', __('Name'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = 0)
    {
        $form = parent::form($id);

        $form->text('name', __('Name'));

        return $form;
    }
}
