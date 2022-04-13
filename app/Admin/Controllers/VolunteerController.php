<?php

namespace App\Admin\Controllers;

use App\Models\Volunteer;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VolunteerController extends PersonController
{
    protected $model = Volunteer::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Волонтеры';

    protected function quickCreateCallback(): callable
    {
        return function (Grid\Tools\QuickCreate $form) {
            $form->select('sex', __('sex'))->options(Volunteer::SEX_OPTIONS);
            parent::quickCreateCallback()($form);
        };
    }

    protected function filterCallBack(): callable
    {
        return function(Grid\Filter $filter) {
            parent::filterCallBack()($filter);
            $filter->equal('sex', __('sex'))->select(Volunteer::SEX_OPTIONS);
        };
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = parent::grid();
        $grid->column('phone', __('phone'))->editable()->filter('like')->hideOnMobile();
        $grid->column('sex', __('sex'))->editable()->switch(Volunteer::SEX_SWITCH_STATES)->hideOnMobile();
        $grid->column('comment', __('comment'))->editable()->hideOnMobile();
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
        $show->field('name', __('Last Name'));
        $show->field('phone', __('phone'));
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
        $form->text('name', __('name'))->required();
        $form->text('phone', __('phone'))->creationRules($validator('phone'));
        $form->multipleSelect('categories', __('categories'))->options($this->getAllCategories());
        $form->switch('sex', __('sex'))->states(Volunteer::SEX_SWITCH_STATES);
        $form->text('comment', __('comment'));
        return $form;
    }
}
