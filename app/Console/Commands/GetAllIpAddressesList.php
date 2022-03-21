<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;

class GetAllIpAddressesList extends \Illuminate\Console\Command
{

    protected $signature = 'ip_list:get';
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
        $logs = DB::table('admin_operation_log')->get([DB::raw('Date(created_at) as date'), 'ip']);
        $new_log_for_unique_ips = fopen('unique_ips.txt', 'w');
        fwrite($new_log_for_unique_ips, $logs->unique('ip')->implode('ip', PHP_EOL));
        fclose($new_log_for_unique_ips);

        $days = $logs->groupBy('date');
        $text = '';
        foreach ($days as $day => $connections) {
            $text .= PHP_EOL . $day . PHP_EOL;
            $connections = $connections->groupBy('ip');
            foreach ($connections as $ip => $useless_data) {
                $text .= $ip . PHP_EOL;
            }
        }
        $new_log_for_full_logs = fopen('full_logs.txt', 'w');
        fwrite($new_log_for_full_logs, $text);
        fclose($new_log_for_full_logs);
        return 0;
    }
}
