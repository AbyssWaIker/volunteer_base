<?php

namespace App\Admin\Controllers;

use App\Models\QuantityUnit;
use App\Models\ReceivingPoint;
use App\Models\Stock;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
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
    protected $title = 'Отправки';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sending());
        $grid->actions(function (Actions $actions) {
            $actions->disableView();
        });

        $grid->column('id', __('Id'));
        $grid->column('receivingPoint.name', __('Receiving Point'));
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
        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
        });
        $receiving_point_options = ReceivingPoint::query()->pluck('name', 'id')->toArray();
        $stock_options = Stock::query()->pluck('name', 'id')->toArray();
        $quantity_unit_options = QuantityUnit::query()->pluck('name', 'id')->toArray();
        $getValueSetter = function(array $options) {
            return function(?string $value, Form\Field\Text $field) use ($options){
                $true_value = @$options[$value];
                $field->datalist($options)
                    ->attribute('value', $true_value)
                    ->value($true_value);
                return $true_value;
            };
        };
        $form->text('receiving_point_id', __('Receiving Point'))
            ->with($getValueSetter($receiving_point_options))
            ->required()
        ;
        $form->hasMany('stocksSent', __('Sent'),
            function (Form\NestedForm $form) use($stock_options, $quantity_unit_options, $getValueSetter) {
                $form->text('stock_id', __('Stock'))
                    ->with($getValueSetter($stock_options))
                    ->required()
                ;
                $form->text('quantity_unit_id', __('Quantity Unit'))
                    ->with($getValueSetter($quantity_unit_options))
                    ->required()
                ;
                $form->number('quantity', __('Quantity'))->default(0);
                $form->radio('deficit_status', __('Deficit'))
                    ->options([
                        Stock::DEFICIT_STATUS_NO_DEFICIT => 'В наличии',
                        Stock::DEFICIT_STATUS_STOCK_IS_LOW => 'Дефицит',
                        Stock::DEFICIT_STATUS_NO_STOCK => 'Отсутствие',
                    ])
                    ->default(Stock::DEFICIT_STATUS_NO_DEFICIT);
            }
        );
        $form->submitted(function (\Encore\Admin\Form $form) {
            $receiving_point = ReceivingPoint::query()->firstOrCreate(['name'=> \request('receiving_point_id')]);
            $stock_sent = \request('stocksSent');
            foreach ($stock_sent as &$item) {
                $stock = QuantityUnit::query()->firstOrCreate(['name' => $item['quantity_unit_id']]);
                $item['quantity_unit_id'] = $stock->id;

                $stock = Stock::query()->firstOrCreate(['name' => $item['stock_id']]);
                $item['stock_id'] = $stock->id;

                $stock->deficit_status = $item['deficit_status'];
                if($item['deficit_status']){
                    $stock->deficit_count_since_last_replenishment+= 1;
                } else {
                    $stock->deficit_count_since_last_replenishment = 0;
                }
                $stock->save();
            }
            $form->receiving_point_id = $receiving_point->id;
            $form->stocksSent = $stock_sent;
            \request()->merge(['stocksSent'=>$stock_sent,'receiving_point_id'=>$receiving_point->id]);
        });
        return $form;
    }
}
