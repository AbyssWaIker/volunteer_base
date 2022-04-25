<?php

namespace App\Admin\Controllers;

use App\Admin\Helpers\GridHelper;
use App\Models\Stock;
use App\Models\StocksSent;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StockController extends AdminController
{
    protected $model = Stock::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Запас';
    protected $category_id;
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = parent::grid();
        $grid->quickCreate(function(Grid\QuickCreate $form) {
            $form->text('name', __('name'))->required();
        });
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'))/*->expand(function (Stock $stock) {
            $days = $stock->sentStocks->groupBy(function (StocksSent $sentStock){ return $sentStock->created_at->toDateString();});
            $resulting_html = '';
            foreach ($days as $day=>$stocks) {
                $list = GridHelper::arrayToList($stocks, function (StocksSent $sent): string {return $sent->getLineForStats();});
                $resulting_html .= "<h3>$day</h3>$list";
            }
            return $resulting_html;
        })*/;
        $grid->column('enabled', __('enabled'))->switch(
            [
                'off' => ['value' => 0, 'text' => 'Выключен', 'color' => 'danger'],
                'on' => ['value' => 1, 'text' => 'Включен', 'color' => 'success'],
            ]
        );

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
        $show->field('name', __('Name'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = 0)
    {
        $form = parent::form($id);

        $form->text('name', __('Name'));
        $form->checkbox('enabled', __('enabled'));

        return $form;
    }
}
