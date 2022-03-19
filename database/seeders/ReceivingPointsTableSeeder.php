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
        ));

        
    }
}