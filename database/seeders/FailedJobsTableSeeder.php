<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FailedJobsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('failed_jobs')->delete();
        

        
    }
}