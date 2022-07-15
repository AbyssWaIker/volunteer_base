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
                'id' => 3,
                'name' => 'Корм Для Тварин',
                'enabled' => true,
                'created_at' => '2022-04-27 09:10:33',
                'updated_at' => '2022-04-27 09:10:33',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Дитяче Харчування',
                'enabled' => true,
                'created_at' => '2022-04-27 09:10:39',
                'updated_at' => '2022-04-27 09:10:39',
            ),
            2 => 
            array (
                'id' => 11,
            'name' => 'Харчі (соціальний набір харчів)',
                'enabled' => true,
                'created_at' => '2022-04-27 09:11:17',
                'updated_at' => '2022-04-27 09:11:17',
            ),
            3 => 
            array (
                'id' => 12,
                'name' => 'постільна білизна',
                'enabled' => true,
                'created_at' => '2022-04-27 09:11:22',
                'updated_at' => '2022-07-08 12:11:58',
            ),
            4 => 
            array (
                'id' => 15,
                'name' => 'посуд',
                'enabled' => true,
                'created_at' => '2022-07-08 12:12:27',
                'updated_at' => '2022-07-08 12:12:27',
            ),
            5 => 
            array (
                'id' => 16,
                'name' => 'іграшки',
                'enabled' => true,
                'created_at' => '2022-07-08 12:12:49',
                'updated_at' => '2022-07-08 12:12:49',
            ),
            6 => 
            array (
                'id' => 2,
            'name' => 'Гігієна ( соціальний набір)',
                'enabled' => true,
                'created_at' => '2022-04-27 09:10:23',
                'updated_at' => '2022-07-08 13:01:48',
            ),
            7 => 
            array (
                'id' => 1,
                'name' => 'Підгузники дитячі',
                'enabled' => true,
                'created_at' => '2022-04-27 09:10:16',
                'updated_at' => '2022-07-08 13:02:18',
            ),
            8 => 
            array (
                'id' => 17,
                'name' => 'Підгузники дорослі',
                'enabled' => true,
                'created_at' => '2022-07-08 13:02:59',
                'updated_at' => '2022-07-08 13:02:59',
            ),
            9 => 
            array (
                'id' => 5,
                'name' => 'Одяг дорослий',
                'enabled' => true,
                'created_at' => '2022-04-27 09:10:45',
                'updated_at' => '2022-07-08 13:03:20',
            ),
            10 => 
            array (
                'id' => 7,
                'name' => 'Взуття доросле',
                'enabled' => true,
                'created_at' => '2022-04-27 09:10:55',
                'updated_at' => '2022-07-08 13:03:35',
            ),
            11 => 
            array (
                'id' => 8,
                'name' => 'Взуття дитяче',
                'enabled' => true,
                'created_at' => '2022-04-27 09:11:00',
                'updated_at' => '2022-07-08 13:03:59',
            ),
            12 => 
            array (
                'id' => 6,
                'name' => 'Одяг дитячий',
                'enabled' => true,
                'created_at' => '2022-04-27 09:10:49',
                'updated_at' => '2022-07-08 13:04:19',
            ),
            13 => 
            array (
                'id' => 18,
            'name' => 'Текстиль ( рушники покривало ковдра )',
                'enabled' => true,
                'created_at' => '2022-07-08 13:06:33',
                'updated_at' => '2022-07-08 13:06:33',
            ),
            14 => 
            array (
                'id' => 19,
            'name' => 'Інше ( інвалідний візок дитячий візок  матрац ходунки )',
                'enabled' => true,
                'created_at' => '2022-07-08 13:09:13',
                'updated_at' => '2022-07-08 13:09:13',
            ),
            15 => 
            array (
                'id' => 9,
                'name' => 'Книги канцтовари',
                'enabled' => false,
                'created_at' => '2022-04-27 09:11:06',
                'updated_at' => '2022-07-08 13:10:12',
            ),
        ));

        
    }
}