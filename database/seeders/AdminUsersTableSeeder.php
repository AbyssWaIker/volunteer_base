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
                'id' => 7,
                'username' => 'Гигиена',
                'password' => '$2y$10$C6nIbkfVEap/T5P5BZ5Np.4xowTHYshh6D88w/oaUCX3BFWkHK/sS',
                'name' => 'Гигиена',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-03 22:52:01',
                'updated_at' => '2022-07-03 22:52:01',
            ),
            2 => 
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
            3 => 
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
            4 => 
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
            5 => 
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
            6 => 
            array (
                'id' => 14,
                'username' => 'rebirth',
                'password' => '$2y$10$6za3LFCWEL6gX.tC..IDjewSg0YiDu.Ztv.RtiI81jvOYldG1/dW.',
                'name' => 'Rebirth',
                'avatar' => NULL,
                'remember_token' => '3BMiIdUfZoKJAOTVkydIVHvWif7kVFEVtP4T02bLw7DfxVOihOcm2slq4PXC',
                'created_at' => '2022-07-08 11:40:44',
                'updated_at' => '2022-07-10 19:06:06',
            ),
            7 => 
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
            8 => 
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
            9 => 
            array (
                'id' => 13,
                'username' => 'vika67',
                'password' => '$2y$10$EebfFgI9TSqeekMIJ5FdXOCnj3J41dxIZEE/NhXwSV7bUcr1okBIe',
                'name' => 'Вика',
                'avatar' => NULL,
                'remember_token' => 'lCySxfGPejtak9JGgO3ERjnGPNlTeQis8SB2Gi4G0inxM6ihmBqNponKfyVU',
                'created_at' => '2022-07-07 10:38:48',
                'updated_at' => '2022-07-07 10:39:45',
            ),
            10 => 
            array (
                'id' => 5,
                'username' => 'reception',
                'password' => '$2y$10$.WKz6G8wLTi1fP0JgsKbbuwZyRNqZy/4EnoEyvUpC22owGy3iZtb2',
                'name' => 'Рецепшен',
                'avatar' => NULL,
                'remember_token' => 'iLJQ8OrIfxh3RGnfvdpb9oqpTGTFaHr7aPxgltm8dRM9j8sABqdqXLGFRtfD',
                'created_at' => '2022-07-03 22:51:11',
                'updated_at' => '2022-07-19 07:26:05',
            ),
            11 => 
            array (
                'id' => 6,
                'username' => 'Медицина',
                'password' => '$2y$10$qWCWq/Seuo39wjM3v4On1.9MtANUf5EzHb56pV0eyL77WPzDbUAFa',
                'name' => 'Медицина',
                'avatar' => NULL,
                'remember_token' => 'yaKDltgH0kt18Z5SwmNr2bbEwrsMFJB2XydUL9oQc4dRIBBaXDocPEUhY5bE',
                'created_at' => '2022-07-03 22:51:29',
                'updated_at' => '2022-07-03 22:51:29',
            ),
            12 => 
            array (
                'id' => 15,
                'username' => 'Arti',
                'password' => '$2y$10$9dKK3eJgIzZZ4jdKMYvzMOo2qr/CcqQ3PxnKLR.gYYKDBlD9qSEN6',
                'name' => 'Артем',
                'avatar' => NULL,
                'remember_token' => '70NhmWr9r7EjLVhrJ2YRLRgjlvTLMD9uc01KvtfKv7VjWM4EVzPJ1FRJQCsG',
                'created_at' => '2022-07-08 11:41:28',
                'updated_at' => '2022-07-08 11:41:28',
            ),
            13 => 
            array (
                'id' => 16,
                'username' => 'Reception',
                'password' => '$2y$10$xPNyl1MJAzsENMCzyS9mgec5UdpAMdm/L.NAlHMg4fjAX1CFQHeke',
                'name' => 'Reception',
                'avatar' => NULL,
                'remember_token' => 'ntx3eAMvzICzvWHqXwGsJFqXQTIj5R3asmzc2EioQULvXp5SKjgT1Iyi4VM5',
                'created_at' => '2022-07-08 11:50:48',
                'updated_at' => '2022-07-08 11:50:48',
            ),
            14 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$J3ipQRVJphw.S1gmqc2H3.18ICcr1jIvYSwMioO91hpxDa9sE9mtK',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'oFiKgQH7Q4z8t1xnpoKkoD5rY2btCHbA4qPzWbz7AgF63COD26kmdKidJIvZ',
                'created_at' => '2022-03-14 20:36:16',
                'updated_at' => '2022-07-08 12:29:19',
            ),
        ));

        
    }
}