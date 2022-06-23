<?php

namespace App\Admin\Controllers;

use App\Admin\Exporters\ModelExporter;
use App\Models\Model;
use Encore\Admin\Controllers\AdminController as BaseController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
class AdminController extends BaseController
{
    protected $model = Model::class;
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid():Grid
    {
        $grid = new Grid(new $this->model);
        // $grid->enableHotKeys();
        $grid->actions(function (Actions $actions) {
            $actions->disableView();
        });
        $model =($this->model);
        $grid->exporter(new ModelExporter($grid, new $model, $this->title));
        $grid->model()->orderByDesc('id');
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
    protected function form($id = 0): Form
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
