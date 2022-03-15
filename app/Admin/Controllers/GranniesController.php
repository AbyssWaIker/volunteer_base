<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\GrannyGive;
use App\Admin\Extensions\GrannyExporter;
use App\Models\Granny;
use Carbon\Carbon;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

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
        $grid->quickSearch(['granny_name', 'address', 'granny_phone', 'passport_id']);
        $grid->quickCreate(function (Grid\Tools\QuickCreate $form) {
            $form->text('granny_name', __('Full name'))->required();
            $form->text('address', __('Address'));
            $form->text('granny_phone', __('Phone'));
            $form->text('passport_id', __('Passport id'));
        });
        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->add(new GrannyGive);
        });
        $grid->exporter(new GrannyExporter);

        $grid->column('id', __('Id'))->hide();
        $grid->column('granny_name', __('Full name'))->filter('like');
        $grid->column('address', __('Address'))->filter('like');
        $grid->column('granny_phone', __('Phone'))->filter('like');
        $grid->column('passport_id', __('Passport id'))->filter('like');
        $grid->column('helpGiven',  __('Receivings'))
            ->display(function (array $help) {return Granny::getHelpHistory($help);});

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
    protected function form(): Form
    {
        $form = new Form(new Granny());

        $form->text('granny_name', __('Full name'))->required();
        $form->text('granny_phone', __('Phone'));
        $form->text('address', __('Address'));
        $form->text('passport_id', __('Passport id'));

        $form->table('helpGiven', 'Получила гуманитарную помощь', function(\Encore\Admin\Form\NestedForm $form){
            $form->hidden('id');
            $form->date('hg_timestamp', 'Время')->default(Carbon::now());
        });

        return $form;
    }
}
