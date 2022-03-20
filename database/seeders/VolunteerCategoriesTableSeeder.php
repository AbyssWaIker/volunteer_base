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
                'id' => 8,
            'name' => 'Машина (Область)',
                'created_at' => '2022-03-19 12:04:29',
                'updated_at' => '2022-03-19 12:04:29',
            ),
            7 => 
            array (
                'id' => 9,
            'name' => 'Машина (Пассажирская)',
                'created_at' => '2022-03-20 11:49:09',
                'updated_at' => '2022-03-20 11:49:09',
            ),
            8 => 
            array (
                'id' => 10,
            'name' => 'Руки (Без Тяжелого)',
                'created_at' => '2022-03-20 11:58:27',
                'updated_at' => '2022-03-20 11:58:37',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Продукты',
                'created_at' => '2022-03-20 12:02:33',
                'updated_at' => '2022-03-20 12:02:33',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'швея',
                'created_at' => '2022-03-20 12:03:52',
                'updated_at' => '2022-03-20 12:03:52',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Врач',
                'created_at' => '2022-03-20 12:05:36',
                'updated_at' => '2022-03-20 12:05:36',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Инженер-механик',
                'created_at' => '2022-03-20 12:28:21',
                'updated_at' => '2022-03-20 12:28:21',
            ),
            13 => 
            array (
                'id' => 15,
            'name' => 'Машина (николаев)',
                'created_at' => '2022-03-20 12:49:09',
                'updated_at' => '2022-03-20 12:49:09',
            ),
        ));

        
    }
}