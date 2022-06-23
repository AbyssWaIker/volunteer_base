<?php

namespace App\Admin\Controllers;

use App\Models\BorderCrossingOption;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BorderCrossingOptionsController extends ModelController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Отправка за границу';
    protected $model = BorderCrossingOption::class;
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid():Grid
    {
        $grid = parent::grid();

        $grid->quickCreate(function(Grid\Tools\QuickCreate $form){
            $form->text('name', __('name'));
            $form->text('contact', __('contact'));
            $form->text('country', __('country'));
            $form->text('time_of_crossing', __('time_of_crossing'));
            $form->text('vacant_places', __('vacant_places'));
            $form->text('comment', __('comment'));
            return $form;
        });

        $grid->column('id', __('id'));
        $grid->column('name', __('name'));
        $grid->column('contact', __('contact'));
        $grid->column('country', __('country'));
        $grid->column('time_of_crossing', __('time_of_crossing'));
        $grid->column('vacant_places', __('vacant_places'));
        $grid->column('comment', __('comment'));
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
    protected function detail($id):Show
    {
        $show = parent::detail($id);

        $show->field('id', __('id'));
        $show->field('name', __('name'));
        $show->field('contact', __('contact'));
        $show->field('country', __('country'));
        $show->field('time_of_crossing', __('time_of_crossing'));
        $show->field('vacant_places', __('vacant_places'));
        $show->field('comment', __('comment'));
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

        $form->text('name', __('name'));
        $form->text('contact', __('contact'));
        $form->text('country', __('country'));
        $form->text('time_of_crossing', __('time_of_crossing'));
        $form->text('vacant_places', __('vacant_places'));
        $form->text('comment', __('comment'));

        return $form;
    }
}
