<?php

namespace App\Admin\Controllers;

use App\Models\QuantityUnit;
use App\Models\ReceivingPoint;
use App\Models\Stock;
use Carbon\Carbon;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\AdminController as BaseController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
class AdminController extends BaseController
{
    protected $model;
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new $this->model);
        $grid->actions(function (Actions $actions) {
            $actions->disableView();
        });
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
        $show = new Show(($this->model)::findOrFail($id));

        return $show;
    }

    public function edit($id, Content $content)
    {
        return $content
        ->title($this->title())
        ->description($this->description['edit'] ?? trans('admin.edit'))
        ->body($this->form($id)->edit($id));
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = 0)
    {
        $model = ($this->model)::query()->findOrNew($id);
        $form = new Form($model);
        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
        });
        $form->disableViewCheck();
        $form->disableEditingCheck();
        $form->disableCreatingCheck();
        $form->disableViewCheck();
        return $form;
    }
}
