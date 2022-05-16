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
                'remember_token' => 'bEmh3Owt81wjWqWLjZ1CkgKGBPQPb7zfTWORaQ4MdMDRbTmh5nE5PWGyDStn',
                'created_at' => '2022-03-14 20:36:16',
                'updated_at' => '2022-03-14 20:36:16',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'test',
                'password' => '$2y$10$PTw6X6oHkOTEjP/qOsFXteff7XfsTp9tL/lsLhGagxPerehh2jsju',
                'name' => 'test',
                'avatar' => NULL,
                'remember_token' => '3132VrKo0CkSrWyZ3Kr9aJMbKVwuQDjQGtrcmKvuPkjIRUqEpANLpuB8M5z1',
                'created_at' => '2022-04-28 11:10:50',
                'updated_at' => '2022-04-28 11:10:50',
            ),
        ));

        
    }
}