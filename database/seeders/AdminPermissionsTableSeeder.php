<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminPermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_permissions')->delete();
        
        \DB::table('admin_permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'All permission',
                'slug' => '*',
                'http_method' => '',
                'http_path' => '*',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'http_method' => 'GET',
                'http_path' => '/',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Login',
                'slug' => 'auth.login',
                'http_method' => '',
                'http_path' => '/auth/login
/auth/logout',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'User setting',
                'slug' => 'auth.setting',
                'http_method' => 'GET,PUT',
                'http_path' => '/auth/setting',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Auth management',
                'slug' => 'auth.management',
                'http_method' => '',
                'http_path' => '/auth/roles
/auth/permissions
/auth/menu
/auth/logs',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Backup',
                'slug' => 'ext.backup',
                'http_method' => '',
                'http_path' => '/backup*',
                'created_at' => '2022-03-29 10:53:42',
                'updated_at' => '2022-03-29 10:53:42',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'view',
                'slug' => 'view',
                'http_method' => 'GET',
                'http_path' => '*',
                'created_at' => '2022-04-28 11:15:01',
                'updated_at' => '2022-04-28 11:52:12',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'volunteers',
                'slug' => 'волонтеры',
                'http_method' => '',
                'http_path' => '/
/volunteers*
/attendance-plan*',
                'created_at' => '2022-07-03 21:53:11',
                'updated_at' => '2022-07-08 11:37:18',
            ),
        ));

        
    }
}