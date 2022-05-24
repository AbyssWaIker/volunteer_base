<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;
use App\Models\Destitute;
use Encore\Admin\Admin;
use Jenssegers\Date\Date;

class PrintPDFLink extends RowAction
{
    public $name = 'В PDF';
    protected $href_target = '_blank';
    protected $wrapper_class = 'print';

    public function html()
    {
        Admin::script($this->script());
        $route = route(admin_get_route('print-pdf'), ['id'=>$this->getKey()]);
        return <<<HTML
        <i class="fa fa-print"></i>
        <div class='hidden'>
            <iframe src="$route" title="{$this->row->name}" id="{$this->wrapper_class}-{$this->getKey()}" name="{$this->wrapper_class}-{$this->getKey()}">
            </iframe>
        </div>
        HTML;
    }
    protected function getData():array
    {
        $destitute = $this->row;
        if(!$destitute instanceof Destitute){
            throw new \Error(__("Could not find data about destitute {$this->getKey()}"));
        }
        $helpGiven = $destitute->helpGiven->last();

        $list = \App\Models\Stock::query()->where('enabled', true)->pluck('name');
        return [
            'dest' => $destitute,
            'date' => Date::parse($helpGiven->hg_timestamp)->locale('uk','ru'),
            'min_number_of_rows' => 20,
            'list' => $list,
            'list_count' => count($list),
        ];
    }
    public function script():string
    {
        return <<<JS
        $('.{$this->getElementClass()}').off('click').on('click', (ev)=>{
            const iframe = window.frames['{$this->wrapper_class}-{$this->getKey()}'];
            iframe.focus();
            iframe.document.head.lastElementChild.addEventListener('load', ()=>console.log('aaaaaaaaa'));
            iframe.print();
        });
        JS;
    }
    public function handle()
    {
        return true;
    }
}
