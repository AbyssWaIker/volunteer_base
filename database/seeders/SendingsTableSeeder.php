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
        
        \DB::table('sendings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'receiving_point_id' => 1,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-18 08:41:33',
                'updated_at' => '2022-03-19 08:13:40',
            ),
            1 => 
            array (
                'id' => 2,
                'receiving_point_id' => 2,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 08:16:14',
                'updated_at' => '2022-03-19 08:16:14',
            ),
            2 => 
            array (
                'id' => 3,
                'receiving_point_id' => 13,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 08:26:57',
                'updated_at' => '2022-03-20 07:38:21',
            ),
            3 => 
            array (
                'id' => 4,
                'receiving_point_id' => 4,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 09:39:37',
                'updated_at' => '2022-03-19 09:39:37',
            ),
            4 => 
            array (
                'id' => 5,
                'receiving_point_id' => 7,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 09:48:31',
                'updated_at' => '2022-03-19 09:54:19',
            ),
            5 => 
            array (
                'id' => 6,
                'receiving_point_id' => 10,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 09:50:25',
                'updated_at' => '2022-03-19 13:34:47',
            ),
            6 => 
            array (
                'id' => 7,
                'receiving_point_id' => 5,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 09:55:18',
                'updated_at' => '2022-03-19 09:55:18',
            ),
            7 => 
            array (
                'id' => 8,
                'receiving_point_id' => 8,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 11:36:50',
                'updated_at' => '2022-03-19 11:36:50',
            ),
            8 => 
            array (
                'id' => 9,
                'receiving_point_id' => 9,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 12:16:49',
                'updated_at' => '2022-03-19 12:16:49',
            ),
            9 => 
            array (
                'id' => 10,
                'receiving_point_id' => 13,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 14:40:54',
                'updated_at' => '2022-03-20 07:38:03',
            ),
            10 => 
            array (
                'id' => 11,
                'receiving_point_id' => 12,
                'times' => 0,
                'date' => '2022-03-20',
                'created_at' => '2022-03-20 07:32:58',
                'updated_at' => '2022-03-20 07:32:58',
            ),
            11 => 
            array (
                'id' => 12,
                'receiving_point_id' => 1,
                'times' => 0,
                'date' => '2022-03-20',
                'created_at' => '2022-03-20 07:40:03',
                'updated_at' => '2022-03-20 07:40:03',
            ),
            12 => 
            array (
                'id' => 13,
                'receiving_point_id' => 2,
                'times' => 0,
                'date' => '2022-03-20',
                'created_at' => '2022-03-20 07:50:51',
                'updated_at' => '2022-03-20 07:50:51',
            ),
            13 => 
            array (
                'id' => 14,
                'receiving_point_id' => 14,
                'times' => 0,
                'date' => '2022-03-20',
                'created_at' => '2022-03-20 08:10:18',
                'updated_at' => '2022-03-20 08:10:18',
            ),
            14 => 
            array (
                'id' => 15,
                'receiving_point_id' => 15,
                'times' => 0,
                'date' => '2022-03-20',
                'created_at' => '2022-03-20 08:18:01',
                'updated_at' => '2022-03-20 08:18:01',
            ),
            15 => 
            array (
                'id' => 16,
                'receiving_point_id' => 16,
                'times' => 0,
                'date' => '2022-03-20',
                'created_at' => '2022-03-20 08:59:43',
                'updated_at' => '2022-03-20 08:59:43',
            ),
            16 => 
            array (
                'id' => 17,
                'receiving_point_id' => 17,
                'times' => 0,
                'date' => '2022-03-20',
                'created_at' => '2022-03-20 09:57:06',
                'updated_at' => '2022-03-20 09:57:06',
            ),
            17 => 
            array (
                'id' => 18,
                'receiving_point_id' => 18,
                'times' => 0,
                'date' => '2022-03-20',
                'created_at' => '2022-03-20 09:57:48',
                'updated_at' => '2022-03-20 09:57:48',
            ),
            18 => 
            array (
                'id' => 19,
                'receiving_point_id' => 13,
                'times' => 0,
                'date' => '2022-03-20',
                'created_at' => '2022-03-20 16:20:08',
                'updated_at' => '2022-03-20 16:20:08',
            ),
            19 => 
            array (
                'id' => 20,
                'receiving_point_id' => 19,
                'times' => 0,
                'date' => '2022-03-21',
                'created_at' => '2022-03-21 07:28:36',
                'updated_at' => '2022-03-21 07:28:36',
            ),
            20 => 
            array (
                'id' => 21,
                'receiving_point_id' => 20,
                'times' => 0,
                'date' => '2022-03-21',
                'created_at' => '2022-03-21 07:40:46',
                'updated_at' => '2022-03-21 07:40:46',
            ),
        ));

        
    }
}