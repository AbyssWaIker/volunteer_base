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
        
        \DB::table('receiving_points')->insert(array (
            0 => 
            array (
                'id' => 1,
            'name' => 'Николаев (Настя 1)',
                'created_at' => '2022-03-18 08:41:33',
                'updated_at' => '2022-03-18 08:41:33',
            ),
            1 => 
            array (
                'id' => 2,
            'name' => 'Николаев (Настя 2)',
                'created_at' => '2022-03-19 08:16:14',
                'updated_at' => '2022-03-19 08:16:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Многодетная семья',
                'created_at' => '2022-03-19 08:26:57',
                'updated_at' => '2022-03-19 08:26:57',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Военкомат',
                'created_at' => '2022-03-19 09:39:37',
                'updated_at' => '2022-03-19 09:39:37',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Аэропорт',
                'created_at' => '2022-03-19 09:46:55',
                'updated_at' => '2022-03-19 09:46:55',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Баушки',
                'created_at' => '2022-03-19 09:50:25',
                'updated_at' => '2022-03-19 09:50:25',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Юра',
                'created_at' => '2022-03-19 09:54:19',
                'updated_at' => '2022-03-19 09:54:19',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Альтестово',
                'created_at' => '2022-03-19 11:36:50',
                'updated_at' => '2022-03-19 11:36:50',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Радужный',
                'created_at' => '2022-03-19 12:14:42',
                'updated_at' => '2022-03-19 12:14:42',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Бабушки',
                'created_at' => '2022-03-19 13:34:47',
                'updated_at' => '2022-03-19 13:34:47',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Две многодетные семьи',
                'created_at' => '2022-03-19 14:41:28',
                'updated_at' => '2022-03-19 14:41:28',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Дальницкая ОТГ',
                'created_at' => '2022-03-20 07:32:58',
                'updated_at' => '2022-03-20 07:32:58',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Многодетные семьи',
                'created_at' => '2022-03-20 07:38:03',
                'updated_at' => '2022-03-20 07:38:03',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Военный корабль Пастов',
                'created_at' => '2022-03-20 08:10:18',
                'updated_at' => '2022-03-20 08:10:18',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Настя 2 приоритет',
                'created_at' => '2022-03-20 08:18:00',
                'updated_at' => '2022-03-20 08:18:00',
            ),
            15 => 
            array (
                'id' => 16,
            'name' => 'Николаев (Елена)',
                'created_at' => '2022-03-20 08:59:43',
                'updated_at' => '2022-03-20 08:59:43',
            ),
            16 => 
            array (
                'id' => 17,
            'name' => 'Жд больница (60 человек)',
                'created_at' => '2022-03-20 09:57:06',
                'updated_at' => '2022-03-20 09:57:06',
            ),
            17 => 
            array (
                'id' => 18,
            'name' => 'Тероборона (Оксана)',
                'created_at' => '2022-03-20 09:57:47',
                'updated_at' => '2022-03-20 09:57:47',
            ),
        ));

        
    }
}