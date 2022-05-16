<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReceivingPointsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('receiving_points')->delete();
        

        
    }
}