<?php

namespace App\Console\Commands;

use App\Admin\Notifications\DividerMessage;
use App\Admin\Notifications\SendingReport;
use App\Models\Sending;
use Carbon\Carbon;
use Illuminate\Notifications\AnonymousNotifiable;
use Jenssegers\Date\Date;

class SendReportForToday extends \Illuminate\Console\Command
{

    protected $signature = 'send:product_report';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Отправляет в телеграм отчет об отправленных продуктах';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $reports = Sending::query()->whereDate('date', '=', Carbon::today())->get();
        (new AnonymousNotifiable)->notify(new DividerMessage(__('Report for :date', ['date'=>Date::today()->format('j F Y')])));
        $notification = new SendingReport;
        foreach ($reports as $report) {
            $report->notify($notification);
        }
        return 0;
    }
}
