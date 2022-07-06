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
                'id' => 2,
                'username' => 'test',
                'password' => '$2y$10$PTw6X6oHkOTEjP/qOsFXteff7XfsTp9tL/lsLhGagxPerehh2jsju',
                'name' => 'test',
                'avatar' => NULL,
                'remember_token' => '3132VrKo0CkSrWyZ3Kr9aJMbKVwuQDjQGtrcmKvuPkjIRUqEpANLpuB8M5z1',
                'created_at' => '2022-04-28 11:10:50',
                'updated_at' => '2022-04-28 11:10:50',
            ),
            1 => 
            array (
                'id' => 5,
                'username' => 'Рецепшен',
                'password' => '$2y$10$1BYZzCB6MDF7v0AO5HtkV.I1oarMejHee/DQsHiwg/HB/Xe6Q2TDa',
                'name' => 'Рецепшен',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-03 22:51:11',
                'updated_at' => '2022-07-03 22:51:11',
            ),
            2 => 
            array (
                'id' => 6,
                'username' => 'Медицина',
                'password' => '$2y$10$qWCWq/Seuo39wjM3v4On1.9MtANUf5EzHb56pV0eyL77WPzDbUAFa',
                'name' => 'Медицина',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-03 22:51:29',
                'updated_at' => '2022-07-03 22:51:29',
            ),
            3 => 
            array (
                'id' => 7,
                'username' => 'Гигиена',
                'password' => '$2y$10$C6nIbkfVEap/T5P5BZ5Np.4xowTHYshh6D88w/oaUCX3BFWkHK/sS',
                'name' => 'Гигиена',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-03 22:52:01',
                'updated_at' => '2022-07-03 22:52:01',
            ),
            4 => 
            array (
                'id' => 8,
                'username' => 'Склад продуктов',
                'password' => '$2y$10$r6PspO2V3KEPsGOY/WHkROsI6PbsB8s4X2LIwqwIKIlLH3Q3SgKwa',
                'name' => 'Склад продуктов',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-03 22:52:33',
                'updated_at' => '2022-07-03 22:52:33',
            ),
            5 => 
            array (
                'id' => 9,
            'username' => 'Кухня (Повара)',
                'password' => '$2y$10$WxUxLVnk8JIAGlCmT9n0LOqpp9S3mNAfPWEoM/b0QxELZIntGU7XS',
            'name' => 'Кухня (Повара)',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-03 22:52:52',
                'updated_at' => '2022-07-03 22:52:52',
            ),
            6 => 
            array (
                'id' => 10,
                'username' => 'Склад одежды',
                'password' => '$2y$10$5A6Fq80XFGgaakn1FNNFieEcnZArl2NWB5CPNTX0En7qsOnzWHSZe',
                'name' => 'Склад одежды',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-03 22:53:10',
                'updated_at' => '2022-07-03 22:53:10',
            ),
            7 => 
            array (
                'id' => 11,
            'username' => 'Логистика (Водители)',
                'password' => '$2y$10$PvJwCSyifTVhGdT/wqhg5OFei8E6c59pNGrikNxurmuj.bGugsra2',
            'name' => 'Логистика (Водители)',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-03 22:53:27',
                'updated_at' => '2022-07-03 22:53:27',
            ),
            8 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$haAgs0SHQEdg.ijin50Sku3vL4Ixsa1CInqrCxKyiJYTKwti3esnq',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'TekRICqhsO4uEyeKnKCgasthJ5lJmF9CannmoILtGjQIrsWT47TU00Osxm3c',
                'created_at' => '2022-03-14 20:36:16',
                'updated_at' => '2022-03-14 20:36:16',
            ),
            9 => 
            array (
                'id' => 3,
                'username' => 'Kristina',
                'password' => '$2y$10$QtOVUN3vhs.uAdaB87zsfuxqKmqERYM/K/3zApI2Rs3xz.bxAcoAm',
                'name' => 'Кристина',
                'avatar' => NULL,
                'remember_token' => 'd2knqV9JXZfYFq03sUutHd4eLdcpiitbWH2qd37k3juHwL64dcObXpcYB8TT',
                'created_at' => '2022-06-29 12:30:09',
                'updated_at' => '2022-06-29 12:30:09',
            ),
            10 => 
            array (
                'id' => 12,
                'username' => 'Oleg',
                'password' => '$2y$10$rsFqE8ZKjuMYagPtuBWB/.HEcBH6NQPNGQEuYsefGSDH.JbH0R5G.',
                'name' => 'Олег',
                'avatar' => NULL,
                'remember_token' => 'vWVOkPutsJyanLMnzNNxyGcAbyjnUfGEbAHpATlYbjYILfyFk54I7bAryfRG',
                'created_at' => '2022-07-04 11:20:02',
                'updated_at' => '2022-07-04 11:20:02',
            ),
        ));

        
    }
}