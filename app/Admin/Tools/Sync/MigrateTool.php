<?php


namespace App\Admin\Tools\Sync;


use Encore\Admin\Facades\Admin;
use Encore\Admin\Grid\Tools\AbstractTool;

class MigrateTool extends AbstractTool
{
    protected function script()
    {
        $route = route('admin.sync');

        return <<<EOT
        $('#sync-btn').on('click', function() {

            $.ajax({
                method: 'post',
                url: '{$route}',
                data: {
                    _token:LA.token,
                },
                success: function () {
                    $.pjax.reload('#pjax-container');
                    toastr.success('Данные успешно сохранены');
                }
            });
        });

        EOT;
    }

    public function render()
    {
        Admin::script($this->script());
        return "<div class='btn-group pull-right grid-create-btn' style='margin-right: 10px'>
                    <div id='sync-btn' class='btn btn-sm btn-danger' title='Сохранить данные в облако'>
                        <i class='fa fa-database'></i><span class='hidden-xs'>&nbsp;&nbsp;Сохранить данные в облако</span>
                    </div>
                </div>";
    }
}
