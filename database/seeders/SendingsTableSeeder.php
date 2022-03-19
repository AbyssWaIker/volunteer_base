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
                'receiving_point_id' => 3,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 08:26:57',
                'updated_at' => '2022-03-19 08:26:57',
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
                'receiving_point_id' => 6,
                'times' => 0,
                'date' => '2022-03-19',
                'created_at' => '2022-03-19 09:50:25',
                'updated_at' => '2022-03-19 09:50:25',
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
        ));

        
    }
}