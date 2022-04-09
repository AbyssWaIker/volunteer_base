<?php

namespace App\Admin\Controllers;

use App\Models\RefugeeShelter;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RefugeeShelterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'RefugeeShelter';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new RefugeeShelter());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('phone', __('Phone'));
        $grid->column('terms', __('Terms'));
        $grid->column('vacant_places', __('Vacant places'));
        $grid->column('conditions', __('Conditions'));
        $grid->column('comment', __('Comment'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(RefugeeShelter::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('phone', __('Phone'));
        $show->field('terms', __('Terms'));
        $show->field('vacant_places', __('Vacant places'));
        $show->field('conditions', __('Conditions'));
        $show->field('comment', __('Comment'));
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
        $form = new Form(new RefugeeShelter());

        $form->text('name', __('Name'));
        $form->mobile('phone', __('Phone'));
        $form->text('terms', __('Terms'));
        $form->text('vacant_places', __('Vacant places'));
        $form->text('conditions', __('Conditions'));
        $form->text('comment', __('Comment'));

        return $form;
    }
}
