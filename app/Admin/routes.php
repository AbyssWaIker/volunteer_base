<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->resource('/', HomeController::class);
    $router->resource('grannies', DestitutesController::class);
    $router->resource('sendings', SendingController::class);
    $router->resource('stocks', StockController::class);

});
