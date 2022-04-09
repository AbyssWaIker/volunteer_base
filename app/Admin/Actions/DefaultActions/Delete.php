<?php


namespace App\Admin\Actions\DefaultActions;

use App\Admin\Actions\DefaultActions\RowAction;
use Encore\Admin\Actions\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Delete extends RowAction
{
    public $name = 'Удалить';
    public function html()
    {
        return '<i class="fa fa-trash"></i>';
    }

    /**
     * @param Model $model
     *
     * @return Response
     */
    public function handle(Model $model)
    {
        $trans = [
            'failed'    => trans('admin.delete_failed'),
            'succeeded' => trans('admin.delete_succeeded'),
        ];

        try {
            DB::transaction(function () use ($model) {
                $model->delete();
            });
        } catch (\Exception $exception) {
            return $this->response()->error("{$trans['failed']} : {$exception->getMessage()}");
        }

        return $this->response()->success($trans['succeeded'])->refresh();
    }

    /**
     * @return void
     */
    public function dialog()
    {
        $this->question(trans('admin.delete_confirm'), '', [
            'confirmButtonColor' => '#d33',
            'confirmButtonText' => 'Да',
            'cancelButtonText' => 'Нет',
        ]);
    }
}
