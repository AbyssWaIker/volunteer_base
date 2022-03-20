<?php


namespace App\Admin\Actions\DefaultActions;

class RowAction extends \Encore\Admin\Actions\RowAction
{
    public function render()
    {
        if ($href = $this->href()) {
            return "<a href='{$href}'>{$this->html()}</a>";
        }

        $this->addScript();

        $attributes = $this->formatAttributes();
        $text = $this->asColumn ? $this->display($this->row($this->column->getName())) : $this->html();
        return "<a data-_key='{$this->getKey()}' href='javascript:void(0);' class='{$this->getElementClass()}' {$attributes}>$text</a>";
    }
}
