<?php

namespace App\Admin\Selectable;

use Encore\Admin\Grid;
use Encore\Admin\Grid\Selectable;
use Encore\Admin\Grid\Tools\QuickCreate;

abstract class Category extends Selectable
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Категории';
    /**
     * @inheritDoc
     */
    public function make()
    {
        $this->disableCreateButton();
        $this->disableFilter();
        $this->quickSearch('name');
        $this->actions(function (\App\Admin\Extentions\Grid\Displayers\Actions $actions) {
            $actions->disableView();
        });
        $this->quickCreate(function (QuickCreate $form) {
            $form->text('name', __('Name'));
        });
        $this->column('name', __('Name'))->sortable();
    }

}
