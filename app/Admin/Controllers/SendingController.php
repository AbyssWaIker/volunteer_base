<?php

namespace App\Admin\Controllers;

use App\Models\QuantityUnit;
use App\Models\ReceivingPoint;
use App\Models\Stock;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use \App\Models\Sending;
use Illuminate\Support\Facades\Request;

class SendingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Sending';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sending());

        $grid->column('id', __('Id'));
        $grid->column('receiving_point_id', __('Receiving point id'));
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
        $show = new Show(Sending::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('receiving_point_id', __('Receiving point id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    public function edit($id, Content $content)
    {
        return $content
        ->title($this->title())
        ->description($this->description['edit'] ?? trans('admin.edit'))
        ->body($this->form($id)->edit($id));
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = 0)
    {
        $model = $id ? Sending::query()->firstOrNew(['id'=>$id]): new Sending();
        $form = new Form($model);
        $receiving_point = ReceivingPoint::query()->pluck('name', 'id');
        $stocks = Stock::query()->pluck('name', 'id');
        $quantity_units = QuantityUnit::query()->pluck('name', 'id');

        $current_receiving_point = @$receiving_point[$model->receiving_point_id];
        $form->hidden('receiving_point_id')
            ->value(@$model->receiving_point_id);
        $form->text('receivingPointString', __('Receiving point'))
            ->datalist($receiving_point)
            ->default($current_receiving_point);
        $form->hasMany('stocksSent', 'Отправленно', function (Form\NestedForm $form) use($stocks, $quantity_units) {
            $form->text('stock_id');
            $form->text('quantity_unit_id');
            $form->text('stock')->datalist($stocks);
            $form->text('quantity_unit')->datalist($quantity_units);
            $form->number('quantity')->default(0);

        });

        $form->submitted(function (\Encore\Admin\Form $form) {

            $rps = \request('receivingPointString');
            $receiving_point = ReceivingPoint::query()->firstOrCreate(['name'=> $rps]);
            $stock_sent = \request('stocksSent');
            foreach ($stock_sent as &$item) {
                $stock = Stock::query()->firstOrCreate(['name' => $item['stockString']]);
                $item['stock_id'] = $stock->id;

                $stock = QuantityUnit::query()->firstOrCreate(['name' => $item['quantityUnitString']]);
                $item['quantity_unit_id'] = $stock->id;
            }
            $form->receiving_point_id = $receiving_point->id;
            $form->stocksSent = $stock_sent;
//            \request()->merge(['stocksSent'=>$stock_sent,'receiving_point_id'=>$receiving_point->id]);
//            dd(\request());
        });
        return $form;
    }
}
