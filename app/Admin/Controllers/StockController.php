<?php

namespace App\Admin\Controllers;

use App\Models\Stock;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StockController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Запас';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = parent::grid();
        $grid->model()->orderByDesc('deficit_status');
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('deficit_status', __('Deficit'))->using(Stock::DEFICIT_STATUS_OPTIONS);
        $grid->column('category.name', __('Category'));
//        $grid->column('created_at', __('Created at'));
//        $grid->column('updated_at', __('Updated at'));

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
        $show->field('name', __('Name'));
        $show->field('deficit_status', __('Deficit'));
        $show->field('category_id', __('Category id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

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
        $form->number('deficit_status', __('Deficit'));
        $form->number('stock_category_id', __('Category id'));

        return $form;
    }
}
