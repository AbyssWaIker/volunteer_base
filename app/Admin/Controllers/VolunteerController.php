<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Destitute\WriteVolunteerAttendance;
use App\Admin\Exporters\VolunteerExporter;
use App\Models\Volunteer;
use Encore\Admin\Form;
use Encore\Admin\Form\NestedForm;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Attendance;
use Carbon\Carbon;
use Encore\Admin\Grid\Displayers\Actions;

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
    protected function grid():Grid
    {
        $grid = parent::grid();
        $grid->actions(function (Actions $actions) {
            $actions->disableView();
            $actions->prepend(new WriteVolunteerAttendance);
        });
        $grid->exporter(new VolunteerExporter($grid, (new $this->model), $this->title()));
        $grid->column('phone', __('phone'))->editable()->filter('like')->hideOnMobile();
        $grid->column('sex', __('sex'))->switch(Volunteer::SEX_SWITCH_STATES)->hideOnMobile();
        $grid->column('placeholder', __('attendance'))->display(function(){
            return Attendance::attendanceToString($this->attendance);
        });
        $grid->column('comment', __('comment'))->editable()->hideOnMobile();
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
        $form->text('phone', __('phone'))/*->creationRules($validator('phone'))*/;
        $form->multipleSelect('categories', __('categories'))->options($this->getAllCategories());
        $form->switch('sex', __('sex'))->states(Volunteer::SEX_SWITCH_STATES);
        $form->text('comment', __('comment'));
        $form->hasMany('attendance', __('attendance'), function(NestedForm $form){
            $form->date('attendance_day', __('attendance_day'))->default(Carbon::now());
            $form->select('status', __('status'))->options(Attendance::SIGNS_DAYS_COVERED)->disable();
        });
        foreach((new Volunteer)->public_appends as $hidden) 
        {
            $form->hidden($hidden);
        }
        return $form;
    }
}
