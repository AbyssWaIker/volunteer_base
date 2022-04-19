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
    $router->resource('volunteers', VolunteerController::class);
    $router->resource('destitute-categories', CategoryDestituteController::class);
    $router->resource('stock-categories', CategoryStockController::class);
    $router->resource('volunteer-categories', CategoryVolunteerController::class);
    $router->resource('refugee-shelters', RefugeeShelterController::class);
    $router->resource('border-crossing-options', BorderCrossingOptionsController::class);

    $router->get('print_pdf_for_destitute-{id}', function($id) {
        $destitute = Destitute::findOrFail($id);
        $helpGiven = $destitute->helpGiven->last();
        $data = [
            'dest' => $destitute,
            'date' => Jenssegers\Date\Date::parse($helpGiven->hg_timestamp)->format('j F Y');
        ];
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.pdf.template', $data);
        return $pdf->download('invoice.pdf');
    })

});
