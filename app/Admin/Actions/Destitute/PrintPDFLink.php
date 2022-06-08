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
    public const LIST_REGULAR = 'regular';
    public const LIST_SKIP = 'skip';
    protected function getRoute():string
    {
        return route(admin_get_route('print-pdf'), ['id'=>$this->getKey(), 'list' => 'regular']);
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
            const url = '{$this->getRoute()}';
            if(mobileCheck()) {
                window.open(url+'.pdf', '_blank').focus();
                return;
            }

            const iframe = document.createElement('iframe');
            iframe.src = url;
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
