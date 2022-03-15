<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$haAgs0SHQEdg.ijin50Sku3vL4Ixsa1CInqrCxKyiJYTKwti3esnq',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'EqfF6JqKTfdV0IeH35Y9u0yOqh9gLNZcjTapKQ05CtJvuwKLUh4mQ23nALG0',
                'created_at' => '2022-03-14 20:36:16',
                'updated_at' => '2022-03-14 20:36:16',
            ),
        ));

        
    }
}