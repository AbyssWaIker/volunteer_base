<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRoleMenuTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_role_menu')->delete();
        
        \DB::table('admin_role_menu')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'menu_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'role_id' => 4,
                'menu_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'role_id' => 5,
                'menu_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'role_id' => 1,
                'menu_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'role_id' => 4,
                'menu_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'role_id' => 5,
                'menu_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'role_id' => 1,
                'menu_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'role_id' => 4,
                'menu_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'role_id' => 5,
                'menu_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'role_id' => 1,
                'menu_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'role_id' => 4,
                'menu_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'role_id' => 5,
                'menu_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'role_id' => 1,
                'menu_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'role_id' => 4,
                'menu_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'role_id' => 5,
                'menu_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'role_id' => 1,
                'menu_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'role_id' => 4,
                'menu_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'role_id' => 5,
                'menu_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'role_id' => 1,
                'menu_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'role_id' => 4,
                'menu_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'role_id' => 5,
                'menu_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

        
    }
}