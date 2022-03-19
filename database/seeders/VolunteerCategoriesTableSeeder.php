<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VolunteerCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('volunteer_categories')->delete();
        
        \DB::table('volunteer_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Руки',
                'created_at' => '2022-03-19 12:03:04',
                'updated_at' => '2022-03-19 12:03:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Повар',
                'created_at' => '2022-03-19 12:03:12',
                'updated_at' => '2022-03-19 12:03:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Одежда',
                'created_at' => '2022-03-19 12:03:17',
                'updated_at' => '2022-03-19 12:03:17',
            ),
            3 => 
            array (
                'id' => 4,
            'name' => 'Машина (Легковая)',
                'created_at' => '2022-03-19 12:03:51',
                'updated_at' => '2022-03-19 12:03:51',
            ),
            4 => 
            array (
                'id' => 5,
            'name' => 'Машина (Бус)',
                'created_at' => '2022-03-19 12:03:59',
                'updated_at' => '2022-03-19 12:03:59',
            ),
            5 => 
            array (
                'id' => 6,
            'name' => 'Машина (Грузовая)',
                'created_at' => '2022-03-19 12:04:12',
                'updated_at' => '2022-03-19 12:04:12',
            ),
            6 => 
            array (
                'id' => 7,
            'name' => 'Машина (Одесса)',
                'created_at' => '2022-03-19 12:04:20',
                'updated_at' => '2022-03-19 12:04:20',
            ),
            7 => 
            array (
                'id' => 8,
            'name' => 'Машина (Область)',
                'created_at' => '2022-03-19 12:04:29',
                'updated_at' => '2022-03-19 12:04:29',
            ),
        ));

        
    }
}