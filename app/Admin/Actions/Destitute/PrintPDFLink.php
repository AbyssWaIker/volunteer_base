<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use Encore\Admin\Admin;

class PrintPDFLink extends RowAction
{
    public $name = 'Распечатать акт';
<<<<<<< HEAD
    protected $href_target = '_blank';
=======
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221
    protected $wrapper_class = 'print';
    protected $icon = 'fa-print';
    public const LIST_REGULAR = 'regular';
    public const LIST_SKIP = 'skip';
<<<<<<< HEAD
    protected function getRoute():string
    {
        return route(admin_get_route('print-pdf'), ['id'=>$this->getKey(), 'list' => 'regular']);
=======
    protected const DEFAULT_LIST_TYPE = self::LIST_REGULAR;
    protected function getRouteOptions($as_file = false):array
    {
        $options = ['id'=>$this->getKey(), 'list' =>self::DEFAULT_LIST_TYPE];
        if($as_file) {
            $options['pdf'] = '.pdf';
        }
        return $options;
    }
    protected function getRoute($as_file = false):string
    {
        return route(admin_get_route('print-pdf'), $this->getRouteOptions($as_file));
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221
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
<<<<<<< HEAD
            const url = '{$this->getRoute()}';
            if(mobileCheck()) {
                window.open(url+'.pdf', '_blank').focus();
=======
            if(mobileCheck()) {
                window.open('{$this->getRoute(true)}', '_blank').focus();
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221
                return;
            }

            const iframe = document.createElement('iframe');
<<<<<<< HEAD
            iframe.src = url;
=======
            iframe.src = '{$this->getRoute()}';
>>>>>>> 0e56d897e4a333d4f5c4540d48a1196b4c3dd221
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
