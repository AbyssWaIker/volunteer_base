<?php

namespace App\Admin\Controllers;

use App\Admin\Exporters\ModelExporter;
use App\Models\BorderCrossingOption;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BorderCrossingOptionsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BorderCrossingOption';
    protected $model = BorderCrossingOption::class;
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = parent::grid();

        $grid->column('id', __('id'));
        $grid->column('name', __('name'));
        $grid->column('contact', __('contact'));
        $grid->column('country', __('country'));
        $grid->column('time_of_crossing', __('Time of crossing'));
        $grid->column('vacant_places', __('Vacant places'));
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

        $show->field('id', __('id'));
        $show->field('name', __('name'));
        $show->field('contact', __('contact'));
        $show->field('country', __('country'));
        $show->field('time_of_crossing', __('Time of crossing'));
        $show->field('vacant_places', __('Vacant places'));
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

        $form->text('name', __('name'));
        $form->text('contact', __('contact'));
        $form->text('country', __('country'));
        $form->text('time_of_crossing', __('Time of crossing'));
        $form->text('vacant_places', __('Vacant places'));
        $form->text('comment', __('Comment'));

        return $form;
    }
}
