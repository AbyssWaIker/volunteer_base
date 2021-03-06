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
            1 => 
            array (
                'id' => 23,
                'parent_id' => 0,
                'order' => 8,
                'title' => 'Посилки',
                'icon' => 'fa-dropbox',
                'uri' => 'packages',
                'permission' => NULL,
                'created_at' => '2022-07-06 23:27:38',
                'updated_at' => '2022-07-10 19:46:30',
            ),
            2 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Запаси',
                'icon' => 'fa-archive',
                'uri' => 'stocks',
                'permission' => NULL,
                'created_at' => '2022-03-17 11:23:57',
                'updated_at' => '2022-07-10 19:46:43',
            ),
            3 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Категорії',
                'icon' => 'fa-arrows-alt',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => '2022-03-19 11:49:38',
                'updated_at' => '2022-07-10 19:46:55',
            ),
            4 => 
            array (
                'id' => 14,
                'parent_id' => 11,
                'order' => 11,
                'title' => 'Потребуючі',
                'icon' => 'fa-users',
                'uri' => 'destitute-categories',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:58:48',
                'updated_at' => '2022-07-10 19:47:08',
            ),
            5 => 
            array (
                'id' => 13,
                'parent_id' => 11,
                'order' => 12,
                'title' => 'Волонтери',
                'icon' => 'fa-child',
                'uri' => 'volunteer-categories',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:58:01',
                'updated_at' => '2022-07-10 19:47:24',
            ),
            6 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 13,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => NULL,
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-06 23:27:52',
            ),
            7 => 
            array (
                'id' => 18,
                'parent_id' => 2,
                'order' => 14,
                'title' => 'Конфиг',
                'icon' => 'fa-gears',
                'uri' => 'config',
                'permission' => NULL,
                'created_at' => '2022-03-29 12:03:05',
                'updated_at' => '2022-07-06 23:27:52',
            ),
            8 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 15,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-06 23:27:52',
            ),
            9 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 16,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-06 23:27:52',
            ),
            10 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 17,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-06 23:27:52',
            ),
            11 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 18,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-06 23:27:52',
            ),
            12 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 19,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-06 23:27:52',
            ),
            13 => 
            array (
                'id' => 16,
                'parent_id' => 2,
                'order' => 20,
                'title' => 'Расписание',
                'icon' => 'fa-clock-o',
                'uri' => 'scheduling',
                'permission' => NULL,
                'created_at' => '2022-03-20 16:40:52',
                'updated_at' => '2022-07-06 23:27:52',
            ),
            14 => 
            array (
                'id' => 17,
                'parent_id' => 2,
                'order' => 21,
                'title' => 'Backup',
                'icon' => 'fa-copy',
                'uri' => 'backup',
                'permission' => NULL,
                'created_at' => '2022-03-29 10:53:42',
                'updated_at' => '2022-07-06 23:27:52',
            ),
            15 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Головна',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-07-10 19:39:07',
            ),
            16 => 
            array (
                'id' => 19,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Місця для переселенців',
                'icon' => 'fa-building',
                'uri' => 'refugee-shelters',
                'permission' => NULL,
                'created_at' => '2022-04-09 07:26:26',
                'updated_at' => '2022-07-10 19:39:33',
            ),
            17 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 4,
                'title' => 'Волонтери',
                'icon' => 'fa-child',
                'uri' => 'volunteers',
                'permission' => NULL,
                'created_at' => '2022-03-19 11:57:21',
                'updated_at' => '2022-07-10 19:39:44',
            ),
            18 => 
            array (
                'id' => 22,
                'parent_id' => 0,
                'order' => 5,
                'title' => 'Розклад',
                'icon' => 'fa-calendar',
                'uri' => 'attendance-plan',
                'permission' => NULL,
                'created_at' => '2022-07-05 00:28:16',
                'updated_at' => '2022-07-10 19:40:02',
            ),
            19 => 
            array (
                'id' => 21,
                'parent_id' => 0,
                'order' => 6,
                'title' => 'Видача',
                'icon' => 'fa-calendar-check-o',
                'uri' => 'attendance',
                'permission' => NULL,
                'created_at' => '2022-07-04 11:13:24',
                'updated_at' => '2022-07-10 19:40:12',
            ),
            20 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 7,
                'title' => 'Потребуючи',
                'icon' => 'fa-users',
                'uri' => 'grannies',
                'permission' => NULL,
                'created_at' => '2022-03-15 13:38:21',
                'updated_at' => '2022-07-10 19:40:31',
            ),
        ));

        
    }
}