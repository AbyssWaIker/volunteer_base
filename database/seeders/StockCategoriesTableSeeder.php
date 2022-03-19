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
                'created_at' => '2022-03-19 13:24:28',
                'updated_at' => '2022-03-19 13:24:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Одежда',
                'created_at' => '2022-03-19 13:24:35',
                'updated_at' => '2022-03-19 13:24:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Гигиена',
                'created_at' => '2022-03-19 13:24:40',
                'updated_at' => '2022-03-19 13:24:40',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Лекарства',
                'created_at' => '2022-03-19 13:25:05',
                'updated_at' => '2022-03-19 13:25:05',
            ),
        ));

        
    }
}