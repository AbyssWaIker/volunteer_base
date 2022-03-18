<?php

namespace App\Console;

use App\Console\Commands\CreateDbBackUpCommand;
use App\Console\Commands\SendReportForToday;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(SendReportForToday::class)->dailyAt('17:00')->timezone('Europe/Kiev');
        $schedule->command(CreateDbBackUpCommand::class)->dailyAt('23:30')->timezone('Europe/Kiev');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
