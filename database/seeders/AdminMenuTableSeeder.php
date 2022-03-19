<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Dashboard',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-03-19 11:59:26',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-03-19 11:59:26',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 11,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-03-19 11:59:26',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 12,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-03-19 11:59:26',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 13,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-03-19 11:59:26',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 14,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-03-19 11:59:26',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 15,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-03-19 11:59:26',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Нуждающиеся',
                'icon' => 'fa-users',
                'uri' => 'grannies',
                'permission' => NULL,
                'created_at' => '2022-03-15 13:38:21',
                'updated_at' => '2022-03-19 11:58:09',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 3,
                'title' => 'Запасы',
                'icon' => 'fa-archive',
                'uri' => 'stocks',
                'permission' => NULL,
                'created_at' => '2022-03-17 11:23:57',
                'updated_at' => '2022-03-19 12:01:45',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 0,
                'order' => 4,
                'title' => 'Отправка',
                'icon' => 'fa-ambulance',
                'uri' => 'sendings',
                'permission' => NULL,
                'created_at' => '2022-03-17 11:24:18',
                'updated_at' => '2022-03-19 11:58:09',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 5,
                'title' => 'Категории',
                'icon' => 'fa-arrows-alt',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2022-03-19 11:49:38',
                'updated_at' => '2022-03-19 11:58:09',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Волонтеры',
                'icon' => 'fa-child',
                'uri' => 'volunteers',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:57:21',
                'updated_at' => '2022-03-19 12:01:29',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 11,
                'order' => 7,
                'title' => 'Волонтеры',
                'icon' => 'fa-child',
                'uri' => 'volunteer-categories',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:58:01',
                'updated_at' => '2022-03-19 11:59:26',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 11,
                'order' => 6,
                'title' => 'Нуждающиеся',
                'icon' => 'fa-users',
                'uri' => 'destitute-categories',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:58:48',
                'updated_at' => '2022-03-19 12:01:12',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 11,
                'order' => 8,
                'title' => 'Запасы',
                'icon' => 'fa-archive',
                'uri' => 'stock-categories',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:59:18',
                'updated_at' => '2022-03-19 11:59:26',
            ),
        ));

        
    }
}