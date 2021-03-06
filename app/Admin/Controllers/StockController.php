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
    protected $title = 'Stocks';
    public const DEFAULT_SWITCH_STATES =  [
            'off' => ['value' => 0, 'text' => 'Выключен', 'color' => 'danger'],
            'on' => ['value' => 1, 'text' => 'Включен', 'color' => 'success'],
        ];
    protected $category_id;
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid():Grid
    {
        $grid = parent::grid();
        $grid->quickCreate(function(Grid\Tools\QuickCreate $form) {
            $form->text('name', __('Name'))->required();
        });
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'))->editable()/*->expand(function (Stock $stock) {
            $days = $stock->sentStocks->groupBy(function (StocksSent $sentStock){ return $sentStock->created_at->toDateString();});
            $resulting_html = '';
            foreach ($days as $day=>$stocks) {
                $list = GridHelper::arrayToList($stocks, function (StocksSent $sent): string {return $sent->getLineForStats();});
                $resulting_html .= "<h3>$day</h3>$list";
            }
            return $resulting_html;
        })*/;
        $grid->column('enabled', __('enabled'))->bool();

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
    protected function form($id = 0):Form
    {
        $form = parent::form($id);

        $form->text('name', __('Name'));
        $form->switch('enabled', __('enabled'))->states(self::DEFAULT_SWITCH_STATES);

        return $form;
    }
}
