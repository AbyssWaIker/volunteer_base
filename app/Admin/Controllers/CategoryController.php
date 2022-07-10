<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Tree;
use Encore\Admin\Show;
use Illuminate\Database\Query\Builder;

abstract class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Categories';
    protected $model = Category::class;
    
    protected function grid()
    {
        return ($this->model)::tree(function(Tree $tree){$this->treeCallback($tree);});
    }
    protected function treeCallback(Tree $tree)
    {
        return;
    }
    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id):Show
    {
        $show = parent::detail($id);

        $show->field('name', __('Name'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = 0): Form
    {
        $form = parent::form($id);

        $form->text('name', __('Name'));

        return $form;
    }
}
