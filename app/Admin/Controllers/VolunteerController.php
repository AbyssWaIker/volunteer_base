<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\DestituteHelper;
use App\Admin\Exporters\CategoryExporter;
use App\Models\Destitute;
use App\Models\DestituteCategory;
use App\Models\Volunteer;
use App\Models\VolunteerCategory;
use Carbon\Carbon;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\Eloquent\Builder;

class VolunteerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Волнотеры';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Volunteer());
        $grid->model()->with(['categories']);
        $grid->quickSearch(['name', 'phone']);
        $grid->quickCreate(function (Grid\Tools\QuickCreate $form) {
            $form->text('name', __('Full name'))->required();
            $form->text('phone', __('Phone'));
            $form->multipleSelect('categories', __('Category'))
                ->options(VolunteerCategory::pluckNameAndID());
        });
        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableView();
        });
        $grid->filter(function(Grid\Filter $filter) {
            $filter->date('created_at', 'Дата');
        });
        $grid->exporter(new CategoryExporter($grid, $this->title));

        $grid->column('id', __('Id'))->sortable()->hide();
        $grid->column('name', __('Full name'))->filter('like');
        $grid->column('phone', __('Phone'))->filter('like');
        $grid->column('categories', __('Category'))->checkboxForBelongsToMany(VolunteerCategory::pluckNameAndID());
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
        $show = new Show(Volunteer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Last name'));
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
    protected function form(): Form
    {
        $form = new Form(new Volunteer());

        $form->text('name', __('Full name'))->required();
        $form->text('phone', __('Phone'));
        $form->multipleSelect('categories', __('Category'))->options(VolunteerCategory::pluckNameAndID());

        return $form;
    }
}
