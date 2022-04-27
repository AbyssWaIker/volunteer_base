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

        // $list_placeholder = [
        //     'Підгузники',
        //     'Гігієна',
        //     'Корм для тварин',
        //     'Дитяче Харчування',
        //     'Одяг',
        //     'Дитячий Одяг',
        //     'Взуття',
        //     'Дитяче взуття',
        //     'Книги',
        //     'Дитячі іграшки',
        //     'клітки для тварин',
        //     'Харчі (соціальний набір харів)',
        //     'Постільна Білизна'
        // ];
        $list = \App\Models\Stock::query()->where('enabled', true)->pluck('name');
        $data = [
            'dest' => $destitute,
            'date' => Jenssegers\Date\Date::parse($helpGiven->hg_timestamp)->locale('uk','ru'),
            'min_number_of_rows' => 20,
            'list' => $list,
            'list_count' => count($list),
        ];
        // return view('admin.pdf.template', $data)->render();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.pdf.template', $data);
        return $pdf->stream($destitute->name.'.pdf');
    });
    $router->resource('grannies', DestitutesController::class);
    $router->resource('sendings', SendingController::class);
    $router->resource('stocks', StockController::class);
    $router->resource('volunteers', VolunteerController::class);
    $router->resource('destitute-categories', CategoryDestituteController::class);
    $router->resource('volunteer-categories', CategoryVolunteerController::class);
    $router->resource('refugee-shelters', RefugeeShelterController::class);
    $router->resource('border-crossing-options', BorderCrossingOptionsController::class);

});
