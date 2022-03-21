<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;
use Stevebauman\Location\Position;

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
        $addresses_cache = [];
        $getIpPosition = function(string $ip) use (&$addresses_cache)/*:Position | string*/ {
            if(key_exists($ip, $addresses_cache)) {
                return $addresses_cache[$ip];
            }
            $addresses_cache[$ip] = Location::get($ip) ?: $ip;
            return $addresses_cache[$ip] ?: $ip;
        };
        $positionToString = function (/*:Position | string*/ $p):string {
            if(is_string($p)) {
                return $p . ' - ?';
            }
            return "{$p->ip} - {$p->countryName}, {$p->regionName}, {$p->cityName}; lat: {$p->latitude}, long: {$p->longitude}";
        };
        $logs = DB::table('admin_operation_log')->get([DB::raw('Date(created_at) as date'), 'ip']);
        $unique_ips = $logs->unique('ip')->map->ip->map($getIpPosition)->map($positionToString)->implode(PHP_EOL);

        $new_log_for_unique_ips = fopen('unique_ips.txt', 'w');
        fwrite($new_log_for_unique_ips, $unique_ips);
        fclose($new_log_for_unique_ips);

        $text = '';
        $days = $logs->groupBy('date');
        foreach ($days as $day => $connections) {
            $text .= PHP_EOL . $day . PHP_EOL;
            $text .= $connections->unique('ip')->map->ip->map($getIpPosition)->map($positionToString)->implode(PHP_EOL) . PHP_EOL;
        }
        $new_log_for_full_logs = fopen('full_logs.txt', 'w');
        fwrite($new_log_for_full_logs, $text);
        fclose($new_log_for_full_logs);
        return 0;
    }
}
