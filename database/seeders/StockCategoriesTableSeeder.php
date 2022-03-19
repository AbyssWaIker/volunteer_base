<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StockCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stock_categories')->delete();
        
        \DB::table('stock_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Продукты',
                'created_at' => '2022-03-19 12:04:40',
                'updated_at' => '2022-03-19 12:04:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Леакрства',
                'created_at' => '2022-03-19 12:04:48',
                'updated_at' => '2022-03-19 12:04:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Гигиена',
                'created_at' => '2022-03-19 12:04:54',
                'updated_at' => '2022-03-19 12:04:54',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Одежда',
                'created_at' => '2022-03-19 12:05:00',
                'updated_at' => '2022-03-19 12:05:00',
            ),
        ));

        
    }
}