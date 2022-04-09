<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminConfigTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_config')->delete();

        \DB::table('admin_config')->insert(array (
            0 =>
            array (
                'id' => 2,
                'name' => 'RECEIVER_TELEGRAM_ID',
                'value' => 'test',
                'description' => 'id получателя отчетов',
                'created_at' => '2022-03-29 11:43:03',
                'updated_at' => '2022-03-29 12:32:01',
            ),
        ));


    }
}
