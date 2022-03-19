<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuantityUnitsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quantity_units')->delete();
        
        \DB::table('quantity_units')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ящик',
                'created_at' => '2022-03-18 08:41:33',
                'updated_at' => '2022-03-18 08:41:33',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'мешок',
                'created_at' => '2022-03-18 08:41:33',
                'updated_at' => '2022-03-18 08:41:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Коробка',
                'created_at' => '2022-03-19 08:13:40',
                'updated_at' => '2022-03-19 08:13:40',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Банка',
                'created_at' => '2022-03-19 08:16:14',
                'updated_at' => '2022-03-19 08:16:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ведро',
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:18:51',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Пачка',
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:18:51',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Бутылочка',
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:18:51',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Кулек',
                'created_at' => '2022-03-19 08:26:57',
                'updated_at' => '2022-03-19 08:26:57',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Лоток',
                'created_at' => '2022-03-19 09:39:37',
                'updated_at' => '2022-03-19 09:39:37',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Буханки',
                'created_at' => '2022-03-19 09:55:44',
                'updated_at' => '2022-03-19 09:55:44',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Упаковка',
                'created_at' => '2022-03-19 11:36:50',
                'updated_at' => '2022-03-19 11:36:50',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'качан',
                'created_at' => '2022-03-19 11:36:50',
                'updated_at' => '2022-03-19 11:36:50',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Пакет',
                'created_at' => '2022-03-19 11:36:50',
                'updated_at' => '2022-03-19 11:36:50',
            ),
        ));

        
    }
}