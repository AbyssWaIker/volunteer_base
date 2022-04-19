<?php


namespace App\Admin\Actions\DefaultActions;

class RowAction extends \Encore\Admin\Actions\RowAction
{
    public $name = '';
    protected $href_target = '_self';
    protected function defaultRender():string
    {
        if ($href = $this->href()) {
            return "<a href='{$href}' target={$this->href_target}>{$this->html()}</a>";
        }

        $this->addScript();

        $attributes = $this->formatAttributes();
        $text = $this->asColumn ? $this->display($this->row($this->column->getName())) : $this->html();
        return "<a data-_key='{$this->getKey()}' href='javascript:void(0);' class='{$this->getElementClass()}' {$attributes}>$text</a>";
    }

    protected $abbr_disabled = false;
    public function disableAbbr(bool $disable = true):self
    {
        $this->abbr_disabled = $disable;
        return $this;
    }
    public function render()
    {
        if($this->abbr_disabled || empty($this->name)) {
            return $this->defaultRender();
        }
        return "<abbr title='$this->name' class='action-abbr'>{$this->defaultRender()}</abbr>";
    }
}
