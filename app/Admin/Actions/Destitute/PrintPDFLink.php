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
        </div>
        HTML;
    }
    public function script():string
    {
        $title = htmlspecialchars($this->row->name);
        return <<<JS
        $('.{$this->getElementClass()}').off('click').on('click', (ev)=>{
            const iframe = document.createElement('iframe');
            iframe.src = '{$this->getRoute()}';
            iframe.title = '{$title}';
            iframe.id =  "{$this->wrapper_class}-{$this->getKey()}";
            iframe.name = iframe.id;
            const parent = ev.target.nextElementSibling;
            iframe.onload = ()=>{
                    window.frames[iframe.id].focus();
                    window.frames[iframe.id].print();
                    setTimeout(()=>parent.removeChild(iframe),200);
            }
            parent.appendChild(iframe);
        });
        JS;
    }
    public function handle()
    {
        return true;
    }
}
