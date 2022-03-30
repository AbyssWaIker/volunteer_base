<?php

namespace App\Admin\Controllers;

use App\Admin\Exporters\PeopleWithCategoriesExporter;
use App\Models\Volunteer;
use App\Models\VolunteerCategory;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\Eloquent\Builder;

class VolunteerController extends AdminController
{
    protected $model = Volunteer::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Волонтеры';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = parent::grid();
        $grid->model()->with(['categories'])->orderByDesc('id');
        $grid->quickSearch(['name', 'phone', 'comment']);
        $grid->quickCreate(function (Grid\Tools\QuickCreate $form) {
            $form->text('name', __('Full name'))->required();
            $form->text('phone', __('Phone'));
            $form->multipleSelect('categories', __('Category'))
                ->attribute('name', 'categories[]')
                ->options(VolunteerCategory::pluckNameAndID());
            $form->select('sex', __('Sex'))->options(Volunteer::SEX_OPTIONS);
            $form->text('comment', __('Comment'));
        });
        $grid->filter(function(Grid\Filter $filter) {
            $filter->disableIdFilter();
            $filter->column(1/2, function (Grid\Filter $filter) {
                $filter->like('name', __('Name'));
                $filter->equal('sex', __('Sex'))->select(Volunteer::SEX_OPTIONS);
            });
            $filter->column(1/2, function (Grid\Filter $filter) {
                $filter->like('phone', __('Phone'));
                $filter->where(function(Builder $query) {
                    $query->whereHas('categories', function (Builder $query) {
                        $table = (new VolunteerCategory)->getTable();
                        $query->whereIn("$table.id", $this->input);
                    });
                }, 'Категории', 'categories')
                    ->multipleSelect(VolunteerCategory::pluckNameAndID());
            });
        });
        $grid->exporter(new PeopleWithCategoriesExporter($grid, $this->title));

//        dd(Volunteer::all()->toArray());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('Full name'))->filter('like');
        $grid->column('phone', __('Phone'))->filter('like');
        $grid->column('categories', __('Category'))->customMultipleSelect(VolunteerCategory::pluckNameAndID());
        $grid->column('sex', __('Sex'))->switch(Volunteer::SEX_SWITCH_STATES);
        $grid->column('comment', __('Comment'));
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
    protected function form($id = 0): Form
    {
        $form = parent::form($id);

        $form->text('name', __('Full name'))->required();
        $form->text('phone', __('Phone'));
        $form->switch('sex', __('Sex'))->options(Volunteer::SEX_SWITCH_STATES);
        $form->multipleSelect('categories', __('Category'))->options(VolunteerCategory::pluckNameAndID());
        $form->text('comment', __('Comment'));

        return $form;
    }
}
