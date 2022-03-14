<?php


namespace App\Admin\Tools\Sync;


use Encore\Admin\Facades\Admin;
use Encore\Admin\Grid\Tools\AbstractTool;

class MigrateTool extends AbstractTool
{
    protected function script()
    {
        $route = route(admin_get_route('sync'));

//        die(exec('git commit -m "db"'));
//        echo exec('git push -u origin master');
        return <<<JS
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

        JS;
    }

    public function render()
    {
        Admin::script($this->script());
        return "<div class='btn-group' style='margin: 10px'>
                    <div id='sync-btn' class='btn btn-sm btn-success' title='Сохранить данные в облако'>
                        <i class='fa fa-cloud-upload'></i><span class='hidden-xs'>&nbsp;&nbsp;Сохранить данные в облако</span>
                    </div>
                </div>";
    }
}
