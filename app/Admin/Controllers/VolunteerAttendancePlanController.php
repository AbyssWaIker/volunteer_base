<?php

namespace App\Admin\Controllers;

use App\Admin\Controllers\VolunteerController;
use App\Admin\Exporters\VolunteerExporter;
use App\Admin\Scopes\VolunteerCategoriesForRoleScope;
use App\Models\Volunteer;
use Encore\Admin\Form;
use Encore\Admin\Form\NestedForm;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Attendance;
use Carbon\Carbon;
use Encore\Admin\Grid\Displayers\Actions;

class VolunteerAttendancePlanController extends VolunteerController
{
    protected $model = Volunteer::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Attendance Plan';
    protected function quickCreateCallback(): callable
    {
        return function (Grid\Tools\QuickCreate $form) {
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
        $grid->model()->category(VolunteerCategoriesForRoleScope::VOLUNTEER_WITHOUT_CATEGORY, false);
        $grid->hideColumns(['phone', 'sex','comment','placeholder']);
        $grid->actions(function (Actions $actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->exporter(new VolunteerExporter($grid, (new $this->model), $this->title()));
        foreach (Volunteer::LAST_WEEK_DAYS as $key => $value) {
            $grid->column($value, __($value))->switch([
                'off' => ['value' => 0, 'text' => 'Нет', 'color' => 'default'],
                'on' => ['value' => 1, 'text' => 'Был', 'color' => 'primary']
            ]);
        }
        $grid->column('last_week_count', __('last_week_count'))->sortable()->filter([0,1,2,3,4,5]);
        foreach (Volunteer::THIS_WEEK_DAYS as $key => $value) {
            $grid->column($value, __($value))->switch([
                'off' => ['value' => 0, 'text' => 'Нет', 'color' => 'default'],
                'on' => ['value' => 1, 'text' => 'Был', 'color' => 'primary']
            ]);
        }
        $grid->column('this_week_count', __('this_week_count'))->sortable()->filter([0,1,2,3,4,5]);
        $grid->column('attendance', __('attendance'))->display(function(){
            return Attendance::attendanceToString($this->attendance);
        });
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
