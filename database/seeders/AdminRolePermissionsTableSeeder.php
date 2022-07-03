<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRolePermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_role_permissions')->delete();
        
        \DB::table('admin_role_permissions')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'permission_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'role_id' => 2,
                'permission_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'role_id' => 2,
                'permission_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'role_id' => 4,
                'permission_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'role_id' => 5,
                'permission_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'role_id' => 6,
                'permission_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'role_id' => 7,
                'permission_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'role_id' => 8,
                'permission_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'role_id' => 9,
                'permission_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'role_id' => 10,
                'permission_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'role_id' => 11,
                'permission_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));

        
    }
}