<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\DestituteHelper;
use App\Admin\Extensions\DestitutesExporter;
use App\Models\Destitute;
use Carbon\Carbon;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DestitutesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Нуждающиеся';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Destitute());
        $grid->quickSearch(['name', 'address', 'phone', 'passport_id']);
        $grid->quickCreate(function (Grid\Tools\QuickCreate $form) {
            $form->text('name', __('Full name'))->required();
            $form->text('address', __('Address'));
            $form->text('phone', __('Phone'));
            $form->text('passport_id', __('Passport id'));
            $form->integer('year_of_birth', __('Year of birth'))->default(1960);
            $form->text('comment', __('Comment'));
        });
        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->add(new DestituteHelper);
        });
        $grid->exporter(new DestitutesExporter);

        $grid->column('id', __('Id'))->hide();
        $grid->column('name', __('Full name'))->filter('like');
        $grid->column('address', __('Address'))->filter('like');
        $grid->column('phone', __('Phone'))->filter('like');
        $grid->column('passport_id', __('Passport id'))->filter('like');
        $grid->column('helpGiven',  __('Receivings'))->display(function (array $help) {return Destitute::getHelpHistory($help);});

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
        $show = new Show(Destitute::findOrFail($id));

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
        $form = new Form(new Destitute());

        $form->text('name', __('Full name'))->required();
        $form->text('phone', __('Phone'));
        $form->text('address', __('Address'));
        $form->text('passport_id', __('Passport id'));
        $form->year('year_of_birth', __('Year of birth'))->default(1960);
        $form->text('comment', __('Comment'));

        $form->table('helpGiven', 'Получила гуманитарную помощь', function(\Encore\Admin\Form\NestedForm $form){
            $form->hidden('id');
            $form->date('hg_timestamp', 'Время')->default(Carbon::now());
        });

        return $form;
    }
}
