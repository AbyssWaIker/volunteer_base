<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->resource('/', GranniesController::class);
    $router->post('sync', function () {
        exec('cd .. && git commit -am "db" && git push -u origin master');
        return true;
    })->name('sync');
});
