<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\GrannyGive;
use App\Models\Granny;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GranniesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Бабушки';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Granny());
        $grid->quickSearch('last_name','first_name','middle_name'.'address'.'passport_id');
        $grid->quickCreate(function (Grid\Tools\QuickCreate $form) {
            $form->text('last_name', __('Last name'))->required();
            $form->text('first_name', __('First name'));
            $form->text('middle_name', __('Middle name'));
            $form->text('address', __('Address'));
            $form->text('passport_id', __('Passport id'));
        });
        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableEdit();
            $actions->disableView();
            $actions->add(new GrannyGive);
        });
//         $grid->disableExport();
        $grid->disableFilter();
        $grid->enableHotKeys();
        $grid->disableCreateButton();

        $grid->model()->orderByDesc('updated_at');

        $grid->column('id', __('Id'))->hide();
        $grid->column('last_name', __('Last name'))->filter('like');
        $grid->column('first_name', __('First name'))->filter('like');
        $grid->column('middle_name', __('Middle name'))->filter('like');
        $grid->column('address', __('Address'))->filter('like');
        $grid->column('passport_id', __('Passport id'))->filter('like');
        $grid->column('created_at', __('Created at'))->sortable()->hide();
        $grid->column('updated_at', __('Last receiving'))->sortable()->display(function($value) {
            $time = \Carbon\Carbon::createFromTimeStamp(strtotime($value));
            $color = $time->isLastWeek() ? 'green' : 'red';
            return <<<HTML
            <span class="text-{$color}">{$time->diffForHumans()}</span>
            HTML;
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
        $show = new Show(Granny::findOrFail($id));

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
    protected function form()
    {
        $form = new Form(new Granny());

        $form->text('last_name', __('Last name'));
        $form->text('first_name', __('First name'));
        $form->text('middle_name', __('Middle name'));
        $form->text('address', __('Address'));
        $form->text('passport_id', __('Passport id'));

        return $form;
    }
}
