<?php

namespace App\Console\Commands;

use Carbon\Carbon;
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
    protected $description = 'Создает бекап базы данных';

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
        $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();
        $total = count($tables);
        foreach ($tables as $index => $table) {
            echo "\r$index/$total";
            Artisan::call("iseed $table --force");
        }
        echo PHP_EOL;
        $today = str_replace('-','_',Carbon::now()->toDateString());
        exec("tar -czf database/backups/$today.tar.gz database/seeders");
        return 0;
    }
}
