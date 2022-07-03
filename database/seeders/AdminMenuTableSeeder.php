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
                'order' => 1,
                'title' => 'Главная',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 09:44:38',
            ),
            1 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 12,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 09:44:58',
            ),
            2 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 13,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 09:44:58',
            ),
            3 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 14,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 09:44:58',
            ),
            4 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 15,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 09:44:58',
            ),
            5 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 16,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-27 09:44:58',
            ),
            6 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 5,
                'title' => 'Нуждающиеся',
                'icon' => 'fa-users',
                'uri' => 'grannies',
                'permission' => NULL,
                'created_at' => '2022-03-15 13:38:21',
                'updated_at' => '2022-04-27 09:44:26',
            ),
            7 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 6,
                'title' => 'Запасы',
                'icon' => 'fa-archive',
                'uri' => 'stocks',
                'permission' => NULL,
                'created_at' => '2022-03-17 11:23:57',
                'updated_at' => '2022-04-27 09:44:26',
            ),
            8 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 7,
                'title' => 'Категории',
                'icon' => 'fa-arrows-alt',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2022-03-19 11:49:38',
                'updated_at' => '2022-04-27 09:44:58',
            ),
            9 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 4,
                'title' => 'Волонтеры',
                'icon' => 'fa-child',
                'uri' => 'volunteers',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:57:21',
                'updated_at' => '2022-04-27 09:44:26',
            ),
            10 => 
            array (
                'id' => 13,
                'parent_id' => 11,
                'order' => 9,
                'title' => 'Волонтеры',
                'icon' => 'fa-child',
                'uri' => 'volunteer-categories',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:58:01',
                'updated_at' => '2022-04-27 09:44:58',
            ),
            11 => 
            array (
                'id' => 14,
                'parent_id' => 11,
                'order' => 8,
                'title' => 'Нуждающиеся',
                'icon' => 'fa-users',
                'uri' => 'destitute-categories',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:58:48',
                'updated_at' => '2022-04-27 09:44:58',
            ),
            12 => 
            array (
                'id' => 16,
                'parent_id' => 2,
                'order' => 17,
                'title' => 'Расписание',
                'icon' => 'fa-clock-o',
                'uri' => 'scheduling',
                'permission' => NULL,
                'created_at' => '2022-03-20 16:40:52',
                'updated_at' => '2022-04-27 09:44:58',
            ),
            13 => 
            array (
                'id' => 17,
                'parent_id' => 2,
                'order' => 18,
                'title' => 'Backup',
                'icon' => 'fa-copy',
                'uri' => 'backup',
                'permission' => NULL,
                'created_at' => '2022-03-29 10:53:42',
                'updated_at' => '2022-04-27 09:44:58',
            ),
            14 => 
            array (
                'id' => 18,
                'parent_id' => 2,
                'order' => 11,
                'title' => 'Конфиг',
                'icon' => 'fa-gears',
                'uri' => 'config',
                'permission' => NULL,
                'created_at' => '2022-03-29 12:03:05',
                'updated_at' => '2022-04-27 09:44:58',
            ),
            15 => 
            array (
                'id' => 19,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Места для беженцев',
                'icon' => 'fa-building',
                'uri' => 'refugee-shelters',
                'permission' => NULL,
                'created_at' => '2022-04-09 07:26:26',
                'updated_at' => '2022-04-27 09:44:26',
            ),
            16 => 
            array (
                'id' => 20,
                'parent_id' => 0,
                'order' => 3,
                'title' => 'Пересечение границы',
                'icon' => 'fa-train',
                'uri' => 'border-crossing-options',
                'permission' => NULL,
                'created_at' => '2022-04-09 07:26:58',
                'updated_at' => '2022-04-27 09:44:26',
            ),
            17 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-03 22:19:23',
            ),
        ));

        
    }
}