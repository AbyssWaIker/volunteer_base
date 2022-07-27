<?php

use Illuminate\Routing\Router;
use \App\Admin\Actions\Destitute\PrintPDFLink;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->resource('/', HomeController::class);
    $router->get('grannies/{id}/print-pdf-{list}-list{pdf?}', function($id, $list = PrintPDFLink::LIST_REGULAR, $pdf = null) {
        $skip_list = $list === PrintPDFLink::LIST_SKIP;
        $destitute = \App\Models\Destitute::query()->with('helpGiven')->findOrFail($id);
        $is_repeat = $destitute->helpGiven->count() > 1;
        $helpGiven = $destitute->helpGiven->last();
        $data = [
            'is_repeat' => $is_repeat,
            'dest' => $destitute,
            'date' => Jenssegers\Date\Date::parse($helpGiven->hg_timestamp)->locale('uk','ru'),
            'min_number_of_rows' => 20,
            'list' => $skip_list || $is_repeat ? [] : \App\Models\Stock::query()->where('enabled', true)->pluck('name'),
        ];
        if(!$pdf){
            return view('admin.pdf.template', $data)->render();
        }
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('admin.pdf.template', $data);
        return $pdf->stream($destitute->name.'.pdf');
    })->name('print-pdf');
    $router->resource('grannies', DestitutesController::class);
    $router->resource('packages', DestitutesPackagesController::class);
    $router->resource('sendings', SendingController::class);
    $router->resource('stocks', StockController::class);
    $router->resource('volunteers', VolunteerController::class);
    $router->resource('attendance', VolunteerAttendanceController::class);
    $router->resource('attendance-plan',VolunteerAttendancePlanController::class);
    $router->resource('destitute-categories', CategoryDestituteController::class);
    $router->resource('volunteer-categories', CategoryVolunteerController::class);
    $router->resource('refugee-shelters', RefugeeShelterController::class);
    $router->resource('border-crossing-options', BorderCrossingOptionsController::class);

});
