<?php

namespace App\Console\Commands;

use App\Admin\Notifications\SendingReport;
use App\Models\Sending;
use Carbon\Carbon;

class SendReportForToday extends \Illuminate\Console\Command
{

    protected $signature = 'send:product_report';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $reports = Sending::query()->whereDate('date', '=', Carbon::today())->get();
        $notification = new SendingReport;
        foreach ($reports as $report) {
            $report->notify($notification);
        }
        return 0;
    }
}
