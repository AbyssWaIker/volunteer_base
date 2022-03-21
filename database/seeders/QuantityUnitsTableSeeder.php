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
            13 => 
            array (
                'id' => 14,
                'name' => '4',
                'created_at' => '2022-03-19 14:40:54',
                'updated_at' => '2022-03-19 14:40:54',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Штука',
                'created_at' => '2022-03-19 14:40:54',
                'updated_at' => '2022-03-19 14:40:54',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Рис',
                'created_at' => '2022-03-20 07:32:58',
                'updated_at' => '2022-03-20 07:32:58',
            ),
            16 => 
            array (
                'id' => 17,
            'name' => 'Коробка (большая)',
                'created_at' => '2022-03-20 07:41:01',
                'updated_at' => '2022-03-20 07:41:01',
            ),
            17 => 
            array (
                'id' => 18,
            'name' => 'Пачка (160г)',
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            18 => 
            array (
                'id' => 19,
            'name' => 'Пачка (80г)',
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Штуки',
                'created_at' => '2022-03-20 08:01:25',
                'updated_at' => '2022-03-20 08:01:25',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Бутылка 0.5',
                'created_at' => '2022-03-20 08:06:08',
                'updated_at' => '2022-03-20 08:06:08',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Запасы на день на 17 человек',
                'created_at' => '2022-03-20 08:10:18',
                'updated_at' => '2022-03-20 08:10:18',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Текст',
                'created_at' => '2022-03-20 08:15:52',
                'updated_at' => '2022-03-20 08:15:52',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Штук',
                'created_at' => '2022-03-20 08:18:00',
                'updated_at' => '2022-03-20 08:18:00',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Банки',
                'created_at' => '2022-03-20 16:20:08',
                'updated_at' => '2022-03-20 16:20:08',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Горох',
                'created_at' => '2022-03-21 07:40:46',
                'updated_at' => '2022-03-21 07:40:46',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Ведерко',
                'created_at' => '2022-03-21 07:40:46',
                'updated_at' => '2022-03-21 07:40:46',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Бутыль',
                'created_at' => '2022-03-21 07:41:31',
                'updated_at' => '2022-03-21 07:41:31',
            ),
        ));

        
    }
}