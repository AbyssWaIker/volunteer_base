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
    protected $title = 'Места для беженцев';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = parent::grid();
        $grid->quickCreate(function(Grid\Tools\QuickCreate $form){
            $form->text('name', __('name'));
            $form->mobile('phone', __('phone'));
            $form->mobile('address', __('address'));
            $form->text('terms', __('Terms'));
            $form->text('vacant_places', __('Vacant places'));
            $form->text('conditions', __('Conditions'));
            $form->text('comment', __('comment'));
            return $form;
        });

        $grid->column('id', __('id'));
        $grid->column('name', __('name'));
        $grid->column('phone', __('phone'));
        $grid->column('address', __('address'));
        $grid->column('terms', __('Terms'));
        $grid->column('vacant_places', __('Vacant places'));
        $grid->column('conditions', __('Conditions'));
        $grid->column('comment', __('comment'));
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

        $show->field('id', __('id'));
        $show->field('name', __('name'));
        $show->field('phone', __('phone'));
        $show->field('terms', __('Terms'));
        $show->field('vacant_places', __('Vacant places'));
        $show->field('conditions', __('Conditions'));
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
    protected function form($id = 0)
    {
        $form = parent::form($id);

        $form->text('name', __('name'));
        $form->mobile('phone', __('phone'));
        $form->text('address', __('address'));
        $form->text('terms', __('Terms'));
        $form->text('vacant_places', __('Vacant places'));
        $form->text('conditions', __('Conditions'));
        $form->text('comment', __('Comment'));

        return $form;
    }
}
