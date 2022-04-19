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
    $router->get('grannies/{id}/print-pdf', function($id) {
        $destitute = \App\Models\Destitute::findOrFail($id);
        $helpGiven = $destitute->helpGiven->last();
        $data = [
            'dest' => $destitute,
            'date' => Jenssegers\Date\Date::parse($helpGiven->hg_timestamp)->format('j F Y'),
            'number_of_rows' => 20,
        ];
        \Barryvdh\DomPDF\Facade\Pdf::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.pdf.template', $data);
        return $pdf->download('test.pdf');
    });
    $router->resource('grannies', DestitutesController::class);
    $router->resource('sendings', SendingController::class);
    $router->resource('stocks', StockController::class);
    $router->resource('volunteers', VolunteerController::class);
    $router->resource('destitute-categories', CategoryDestituteController::class);
    $router->resource('stock-categories', CategoryStockController::class);
    $router->resource('volunteer-categories', CategoryVolunteerController::class);
    $router->resource('refugee-shelters', RefugeeShelterController::class);
    $router->resource('border-crossing-options', BorderCrossingOptionsController::class);

});
