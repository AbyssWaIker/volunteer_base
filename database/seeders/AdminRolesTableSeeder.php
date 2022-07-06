<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_roles')->delete();
        
        \DB::table('admin_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'slug' => 'administrator',
                'created_at' => '2022-03-14 21:47:24',
                'updated_at' => '2022-03-14 21:47:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'test',
                'slug' => 'test',
                'created_at' => '2022-04-28 11:10:00',
                'updated_at' => '2022-04-28 11:10:00',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Штаб/Офис',
                'slug' => 'office',
                'created_at' => '2022-07-03 21:51:26',
                'updated_at' => '2022-07-03 21:51:39',
            ),
            3 => 
            array (
                'id' => 5,
            'name' => 'Администраторы (Рецепшен)',
                'slug' => 'reception',
                'created_at' => '2022-07-03 21:51:59',
                'updated_at' => '2022-07-03 21:51:59',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Медицина',
                'slug' => 'medicine',
                'created_at' => '2022-07-03 21:57:32',
                'updated_at' => '2022-07-03 21:57:32',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Склад продуктов',
                'slug' => 'products',
                'created_at' => '2022-07-03 22:01:42',
                'updated_at' => '2022-07-03 22:01:42',
            ),
            6 => 
            array (
                'id' => 9,
            'name' => 'Кухня (Повара)',
                'slug' => 'kitchen',
                'created_at' => '2022-07-03 22:02:09',
                'updated_at' => '2022-07-03 22:02:09',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Склад одежды',
                'slug' => 'clothes',
                'created_at' => '2022-07-03 22:03:14',
                'updated_at' => '2022-07-03 22:03:14',
            ),
            8 => 
            array (
                'id' => 11,
            'name' => 'Логистика (Водители)',
                'slug' => 'drivers',
                'created_at' => '2022-07-03 22:03:47',
                'updated_at' => '2022-07-03 22:03:47',
            ),
            9 => 
            array (
                'id' => 7,
                'name' => 'Гигиена',
                'slug' => 'hygiene',
                'created_at' => '2022-07-03 22:01:26',
                'updated_at' => '2022-07-03 22:51:41',
            ),
        ));

        
    }
}