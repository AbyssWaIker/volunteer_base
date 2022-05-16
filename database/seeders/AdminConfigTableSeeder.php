<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminConfigTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_config')->delete();
        

        
    }
}