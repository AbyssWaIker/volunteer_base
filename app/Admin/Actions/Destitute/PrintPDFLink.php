<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use Encore\Admin\Admin;

class PrintPDFLink extends RowAction
{
    public $name = 'Распечатать акт';
    protected $wrapper_class = 'print';
    protected $icon = 'fa-print';
    public const LIST_REGULAR = 'regular';
    public const LIST_SKIP = 'skip';
    protected $default_list_type = self::LIST_REGULAR;
    protected function getRouteOptions($as_file = false):array
    {
        $options = ['id'=>$this->getKey(), 'list' =>$this->default_list_type];
        if($as_file) {
            $options['pdf'] = '.pdf';
        }
        return $options;
    }
    protected function getRoute($as_file = false):string
    {
        return route(admin_get_route('print-pdf'), $this->getRouteOptions($as_file));
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
        $title = htmlspecialchars(json_encode($this->row->name), ENT_QUOTES, 'UTF-8');
        return <<<JS
        $('.{$this->getElementClass()}').off('click').on('click', (ev)=>{
            console.log(ev.target);
            if(mobileCheck()) {
                window.open('{$this->getRoute(true)}', '_blank').focus();
                return;
            }
            const iframe = document.createElement('iframe');
            iframe.src = '{$this->getRoute()}';
            iframe.title =ev.target.innerText;
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
