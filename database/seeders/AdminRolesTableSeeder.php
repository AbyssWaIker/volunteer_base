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
        ));

        
    }
}