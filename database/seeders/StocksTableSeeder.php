<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stocks')->delete();
        
        \DB::table('stocks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Підгузники',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:10:16',
                'updated_at' => '2022-04-27 09:10:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Гігієна',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:10:23',
                'updated_at' => '2022-04-27 09:10:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Корм Для Тварин',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:10:33',
                'updated_at' => '2022-04-27 09:10:33',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Дитяче Харчування',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:10:39',
                'updated_at' => '2022-04-27 09:10:39',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Одяг',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:10:45',
                'updated_at' => '2022-04-27 09:10:45',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Дитячий Одяг',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:10:49',
                'updated_at' => '2022-04-27 09:10:49',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Взуття',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:10:55',
                'updated_at' => '2022-04-27 09:10:55',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Дитяче Взуття',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:11:00',
                'updated_at' => '2022-04-27 09:11:00',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Книги',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:11:06',
                'updated_at' => '2022-04-27 09:11:06',
            ),
            9 => 
            array (
                'id' => 11,
            'name' => 'Харчі (соціальний набір харчів)',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:11:17',
                'updated_at' => '2022-04-27 09:11:17',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'постільна білизна',
                'enabled' => 1,
                'created_at' => '2022-04-27 09:11:22',
                'updated_at' => '2022-04-27 09:11:22',
            ),
            11 => 
            array (
                'id' => 13,
            'name' => 'First response WASH and dignity kit (для семей с детьми)',
                'enabled' => 1,
                'created_at' => '2022-05-16 18:00:03',
                'updated_at' => '2022-05-16 18:00:03',
            ),
            12 => 
            array (
                'id' => 14,
            'name' => 'First aid kit A (для семей с детьми)',
                'enabled' => 1,
                'created_at' => '2022-05-16 18:00:36',
                'updated_at' => '2022-05-16 18:00:36',
            ),
        ));

        
    }
}