<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use Encore\Admin\Admin;

class PrintPDFLink extends RowAction
{
    public $name = 'Распечатать акт';
    protected $href_target = '_blank';
    protected $wrapper_class = 'print';
    protected $icon = 'fa-print';
    protected function getRoute():string
    {
        return route(admin_get_route('print-pdf'), ['id'=>$this->getKey()]);
    }
    public function html()
    {
        Admin::script($this->script());
        return <<<HTML
        <i class="fa {$this->icon}"></i>
        <div class='hidden'>
            <iframe src="{$this->getRoute()}" title="{$this->row->name}" id="{$this->wrapper_class}-{$this->getKey()}" name="{$this->wrapper_class}-{$this->getKey()}">
            </iframe>
        </div>
        HTML;
    }
    public function script():string
    {
        return <<<JS
        $('.{$this->getElementClass()}').off('click').on('click', (ev)=>{
            const iframe = window.frames['{$this->wrapper_class}-{$this->getKey()}'];
            iframe.focus();
            iframe.print();
        });
        JS;
    }
    public function handle()
    {
        return true;
    }
}
