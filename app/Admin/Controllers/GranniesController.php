<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\GrannyGive;
use App\Models\Granny;
use Carbon\Carbon;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Config;
use Jenssegers\Date\Date;

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
        $grid->quickSearch('granny_name', 'address', 'phone', 'passport_id');
        $grid->quickCreate(function (Grid\Tools\QuickCreate $form) {
            $form->text('granny_name', __('Full name'))->required();
            $form->text('address', __('Address'));
            $form->text('granny_phone', __('Phone'));
            $form->text('passport_id', __('Passport id'));
        });
        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableEdit();
            $actions->disableView();
            $actions->add(new GrannyGive);
        });
//        dd(Granny::query()->with('helpGiven')->get()->sortBy('first_receiving')->map->id->toArray());

        $grid->disableFilter();
        $grid->enableHotKeys();
        $grid->disableCreateButton();

        $grid->column('id', __('Id'))->hide();
        $grid->column('granny_name', __('Full name'))->filter('like');
        $grid->column('first_receiving', __('first_receiving'))->filter('like');
        $grid->column('address', __('Address'))->filter('like');
        $grid->column('granny_phone', __('Phone'))->filter('like');
        $grid->column('passport_id', __('Passport id'))->filter('like');
        $grid->column('helpGiven',  __('Last receiving'))->display(function (array $help) {
            $help_received_this_week = false;
            $dates = array_map(function(array $helpGiven) use (&$help_received_this_week) {
                $date = Date::parse($helpGiven['created_at']);
                $help_received_this_week = $help_received_this_week || $date->isCurrentWeek();
                return $date->format('j F Y');
            }, $help);
            $help_received_this_week = '';//$help_received_this_week ? '❌' : '✅';
            return implode(', ', $dates) . ' ' . $help_received_this_week;
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

        $form->text('granny_name', __('Full name'))->required();
        $form->text('granny_phone', __('Phone'));
        $form->text('address', __('Address'));
        $form->text('passport_id', __('Passport id'));

        return $form;
    }
}
