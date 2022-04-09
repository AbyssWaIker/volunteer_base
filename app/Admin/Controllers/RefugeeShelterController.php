<?php

namespace App\Admin\Controllers;

use App\Models\RefugeeShelter;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RefugeeShelterController extends AdminController
{
    protected $model = RefugeeShelter::class;
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
        $grid = parent::grid();
        $grid->quickCreate(function(Grid\Tools\QuickCreate $form){
            $form->text('name', __('Name'));
            $form->mobile('phone', __('Phone'));
            $form->text('terms', __('Terms'));
            $form->text('vacant_places', __('Vacant places'));
            $form->text('conditions', __('Conditions'));
            $form->text('comment', __('Comment'));
            return $form;
        });

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
        $show = parent::detail($id);

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
    protected function form($id = 0)
    {
        $form = parent::form($id);

        $form->text('name', __('Name'));
        $form->mobile('phone', __('Phone'));
        $form->text('terms', __('Terms'));
        $form->text('vacant_places', __('Vacant places'));
        $form->text('conditions', __('Conditions'));
        $form->text('comment', __('Comment'));

        return $form;
    }
}
