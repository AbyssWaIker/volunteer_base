<?php


namespace App\Admin\Actions;

use App\Admin\Actions\DefaultActions\Delete;
use App\Admin\Actions\DefaultActions\Edit;
use Encore\Admin\Admin;
use Encore\Admin\Grid\Displayers\DropdownActions;

class Actions extends DropdownActions
{
    protected $view = 'admin.grid.actions.actions';

    protected $defaultClass = [Edit::class, Delete::class];
    protected $custom_prepends = [];

    public function prepend($action):self
    {
        $this->prepareAction($action);

        array_push($this->custom_prepends, $action);
        return $this;
    }

    /**
     * @param null|\Closure $callback
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function display($callback = null)
    {
        if ($callback instanceof \Closure) {
            $callback->call($this, $this);
        }
        if ($this->disableAll) {
            return '';
        }
        $this->prependDefaultActions();
        $variables = [
            'custom_prepends' => $this->custom_prepends,
            'default' => $this->default,
            'custom'  => $this->custom,
        ];
        return Admin::component($this->view, $variables);
    }

}
