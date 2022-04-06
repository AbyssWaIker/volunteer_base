<?php

namespace App\Admin\Controllers;

use App\Admin\Exporters\PeopleWithCategoriesExporter;
use App\Models\Volunteer;
use App\Models\VolunteerCategory;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\Eloquent\Builder;

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
            $form->select('sex', __('Sex'))->options(Volunteer::SEX_OPTIONS);
            parent::quickCreateCallback()($form);
        };
    }

    protected function filterCallBack(): callable
    {
        return function(Grid\Filter $filter) {
            parent::filterCallBack()($filter);
            $filter->equal('sex', __('Sex'))->select(Volunteer::SEX_OPTIONS);
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
        $grid->column('sex', __('Sex'))->switch(Volunteer::SEX_SWITCH_STATES)->hideOnMobile();
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
        $show->field('phone', __('Phone'));
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
        $form->switch('sex', __('Sex'))->states(Volunteer::SEX_SWITCH_STATES);
        return $form;
    }
}
