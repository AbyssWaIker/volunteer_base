<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title(__('Main Page'))
            ->row(function (Row $row) {
                $menus = Admin::menu();
                foreach ($menus as $menu) {
                    $menu_is_valid =  $menu['uri'] 
                        && $menu['uri'] !== '/' 
                        && $menu['parent_id'] == null 
                        && Admin::user()->visible(\Illuminate\Support\Arr::get($menu, 'roles', [])) 
                        && Admin::user()->can(\Illuminate\Support\Arr::get($menu, 'permission'));
                    if(!$menu_is_valid) {
                        continue;
                    }
                    $row->column(4, function (Column $column) use ($menu) {
                        $column->append(new InfoBox('', substr($menu['icon'], 3), 'aqua', config('admin.route.prefix').'/'.$menu['uri'], $menu['title']));
                    });
                }

            });
    }
}
