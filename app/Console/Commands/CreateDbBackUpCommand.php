<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class CreateDbBackUpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tables = DB::select('SHOW TABLES');
        $total = count($tables);
        foreach ($tables as $index => $table) {
            echo "\r$index/$total";
            foreach ($table as $key => $value){
                Artisan::call("iseed $value --force");
            }
        }
        echo PHP_EOL;
        return 0;
    }
}
