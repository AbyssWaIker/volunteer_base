<?php

namespace App\Admin\Controllers;

use App\Models\QuantityUnit;
use App\Models\ReceivingPoint;
use App\Models\Stock;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use \App\Models\Sending;

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
        $model = Sending::query()->findOrNew($id);
        $form = new Form($model);
        $receiving_point = ReceivingPoint::query()->pluck('name', 'id')->toArray();
        $stocks = Stock::query()->pluck('name', 'id')->toArray();
        $quantity_units = QuantityUnit::query()->pluck('name', 'id')->toArray();
        $getValueSetter = function(array $options) {
            return function(?string $value, Form\Field\Text $field) use ($options){
                $true_value = @$options[$value];
                $field->attribute('value', $true_value)->datalist($options)->value($true_value);
                return $true_value;
            };
        };
        $form->text('receiving_point_id')->with($getValueSetter($receiving_point));
        $form->hasMany('stocksSent', 'Отправленно', function (Form\NestedForm $form) use($stocks, $quantity_units, $getValueSetter) {
            $form->text('stock_id')->with($getValueSetter($stocks));
            $form->text('quantity_unit_id')->with($getValueSetter($quantity_units));
            $form->number('quantity')->default(0);

        });

        $form->submitted(function (\Encore\Admin\Form $form) {
            $receiving_point = ReceivingPoint::query()->firstOrCreate(['name'=> \request('receiving_point_id')]);
            $stock_sent = \request('stocksSent');
            foreach ($stock_sent as &$item) {
                $stock = Stock::query()->firstOrCreate(['name' => $item['stock_id']]);
                $item['stock_id'] = $stock->id;

                $stock = QuantityUnit::query()->firstOrCreate(['name' => $item['quantity_unit_id']]);
                $item['quantity_unit_id'] = $stock->id;
            }
            $form->receiving_point_id = $receiving_point->id;
            $form->stocksSent = $stock_sent;
            \request()->merge(['stocksSent'=>$stock_sent,'receiving_point_id'=>$receiving_point->id]);
//            dd(\request());
        });
        return $form;
    }
}
