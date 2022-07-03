<?php


namespace App\Admin\Actions;

use App\Admin\Actions\DefaultActions\Delete;
use App\Admin\Actions\DefaultActions\Edit;
use App\Admin\Actions\DefaultActions\Show;
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
    /**
     * Disable view action.
     *
     * @param bool $disable
     *
     * @return $this
     */
    public function disableView(bool $disable = true)
    {
        if ($disable) {
            array_delete($this->defaultClass, Show::class);
        } elseif (!in_array(Show::class, $this->defaultClass)) {
            array_push($this->defaultClass, Show::class);
        }

        return $this;
    }

    /**
     * Disable delete.
     *
     * @param bool $disable
     *
     * @return $this.
     */
    public function disableDelete(bool $disable = true)
    {
        if ($disable) {
            array_delete($this->defaultClass, Delete::class);
        } elseif (!in_array(Delete::class, $this->defaultClass)) {
            array_push($this->defaultClass, Delete::class);
        }

        return $this;
    }

    /**
     * Disable edit.
     *
     * @param bool $disable
     *
     * @return $this
     */
    public function disableEdit(bool $disable = true)
    {
        if ($disable) {
            array_delete($this->defaultClass, Edit::class);
        } elseif (!in_array(Edit::class, $this->defaultClass)) {
            array_push($this->defaultClass, Edit::class);
        }

        return $this;
    }

}
