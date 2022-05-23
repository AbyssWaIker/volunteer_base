<?php

namespace App\Admin\Actions\Destitute;
use App\Admin\Actions\DefaultActions\RowAction;

class PrintPDFLink extends RowAction
{
    public $name = 'В PDF';
    protected $href_target = '_blank';

    public function html()
    {

        $destitute = \App\Models\Destitute::findOrFail($this->row);
        $helpGiven = $destitute->helpGiven->last();

        $list = \App\Models\Stock::query()->where('enabled', true)->pluck('name');
        $data = [
            'dest' => $destitute,
            'date' => Jenssegers\Date\Date::parse($helpGiven->hg_timestamp)->locale('uk','ru'),
            'min_number_of_rows' => 20,
            'list' => $list,
            'list_count' => count($list),
        ];
        // return view('admin.pdf.template', $data)->render();
        $pdf = view('admin.pdf.template', $data)->render();

        return <<<HTML 
        <i class="fa fa-print"></i>
        <div class='hidden'>
            <div id="print-{$this->row}">
                {$pdf}
            </div>

        </div>
        HTML;
    }
    public function script():string
    {
        return <<<JS
        $('#print-{$this->row}').click((ev)=>{
            console.log('presss');    
        })
        JS;
    }
}
