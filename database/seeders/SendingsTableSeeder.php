<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SendingsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sendings')->delete();
        

        
    }
}