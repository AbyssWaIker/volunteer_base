<?php

namespace App\Admin\Controllers;

use App\Admin\Helpers\GridHelper;
use App\Models\Stock;
use App\Models\StocksSent;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

abstract class StockByCategoryController extends AdminController
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
        $grid->model()/*->where('category_id', $this->category_id)*/->orderByDesc('deficit_status');
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'))->expand(function (Stock $stock) {
            $days = $stock->sentStocks->groupBy(function (StocksSent $sentStock){ return $sentStock->created_at->toDateString();});
            $resulting_html = '';
            foreach ($days as $day=>$stocks) {
                $list = GridHelper::arrayToList($stocks, function (StocksSent $sent): string {return $sent->getLineForStats();});
                $resulting_html .= "<h3>$day</h3>$list";
            }
            return $resulting_html;
        });
        $grid->column('deficit_status', __('Deficit'))->using(Stock::DEFICIT_STATUS_OPTIONS);
        $grid->column('category.name', __('categories'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show->field('deficit_status', __('Deficit'));
        $show->field('category_id', __('Category id'));
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
        $form->number('deficit_status', __('Deficit'));
        $form->hidden('category_id')->default($this->category_id);

        return $form;
    }
}
