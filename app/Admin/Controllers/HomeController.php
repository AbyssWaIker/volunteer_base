<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Controllers\Dashboard;
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
//            ->description('Description...')
//            ->row(Dashboard::title())
            ->row(function (Row $row) {
                $groups = Menu::all()->filter(function (Menu $menu) {
                    return $menu->uri && $menu->uri !== '/';
                })->groupBy('parent_id');
                foreach ($groups as $parent_id => $group) {
                    if(!$parent_id) {
                        foreach($group as $menu) {
                            $row->column(4, function (Column $column) use ($menu) {
                                $column->append(new InfoBox($menu->title, substr($menu->icon, 3), 'aqua', config('admin.route.prefix').'/'.$menu->uri, ''));
                            });
                        }
                    }
                    $menu = Menu::find($parent_id);
                    $links = $group->map(function(Menu $menu) {
                        return '<a href="'.config('admin.route.prefix').'/'.$menu->uri.'">'.$menu->title.'</a>';
                    })->implode('<br/>');
                    $row->column(4, function (Column $column) use ($menu, $links]) {

                        $column->append(new InfoBox($menu->title, substr($menu->icon, 3), 'aqua', config('admin.route.prefix').'/'.$menu->uri, $links));
                    });
                }

            });
    }
}
