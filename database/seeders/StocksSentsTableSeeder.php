<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StocksSentsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stocks_sents')->delete();
        

        
    }
}