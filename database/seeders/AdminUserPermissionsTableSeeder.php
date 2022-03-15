<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUserPermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_user_permissions')->delete();
        

        
    }
}