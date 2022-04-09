<?php

namespace App\Admin\Extentions\Grid\Displayers;

use Encore\Admin\Grid\Displayers\AbstractDisplayer;
use Illuminate\Support\Arr;

class VerticalTable extends AbstractDisplayer
{
    protected $view = 'admin.grid.displayer.vertical-table';
    /**
     * @inheritDoc
     */
    public function display($titles = [])
    {
        if (empty($this->value)) {
            return '';
        }

        if (empty($titles)) {
            $titles = array_keys($this->value[0]);
        }

        if (Arr::isAssoc($titles)) {
            $columns = array_keys($titles);
        } else {
            $titles = array_combine($titles, $titles);
            $columns = $titles;
        }
        $data = [];
        foreach ($this->value as $item) {
            $arr = Arr::only($item, $columns);

            foreach ($columns as $index => $column) {
                if (array_key_exists($column, $arr)) {
                    $data[$column][$index] = $arr[$column];
                }
            }

        }
        $variables = [
            'titles' => $titles,
            'data'   => $data,
        ];

        return view($this->view, $variables)->render();
    }
}
