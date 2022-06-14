<?php

namespace App\Admin\Controllers;

use App\Admin\Exporters\ModelExporter;
<<<<<<< HEAD
use App\Admin\Helpers\ValidatorHelper;
use App\Models\Model;
use App\Models\Person;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\Eloquent\Builder;
=======
use App\Models\Model;
use Encore\Admin\Grid;
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221

abstract class ModelController extends AdminController
{
    protected $model = Model::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Модель';

    protected function getModel():Model
    {
        return new $this->model;
    }

    protected function quickCreateCallback():callable
    {
        return function (Grid\Tools\QuickCreate $form) {
            $form->text('name', __('name'))->required();
            $form->text('phone', __('phone'));
            $form->text('comment', __('comment'));
        };
    }
    protected function filterCallBack():callable
    {
        return function(Grid\Filter $filter) {
            $filter->disableIdFilter();
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
        $model = $this->getModel();
        $grid->model()->with($model->getRelations())->orderByDesc('id');
        $grid->quickSearch($model->getFillable());
        $grid->quickCreate($this->quickCreateCallback());
        $grid->filter($this->filterCallBack());
        $grid->exporter(new ModelExporter($grid,$this->getModel(), $this->title));

        $grid->column('tableInfo', __('Mobile Adaptiveness Hack'))
            ->display(function (){return [$this->tableInfo];})
            ->verticalTable($model::getTableTitles())
            ->hideOnDesktop();
        return $grid;
    }
<<<<<<< HEAD

    protected function formValidator($id):callable
    {
        $model = $this->getModel();
        $table = $model->getTable();
        return function(?string $column = null)use($table,$id){return ValidatorHelper::validatorUnique($table, $column);};
    }
=======
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221
}
