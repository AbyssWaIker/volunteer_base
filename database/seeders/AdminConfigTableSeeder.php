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
                'id' => 1,
                'name' => 'RECEIVER_TELEGRAM_ID',
                'value' => '385305393',
            'description' => '(Через запятую) id получателей отчетов',
                'created_at' => '2022-03-29 12:20:33',
                'updated_at' => '2022-03-29 12:20:33',
            ),
        ));

        
    }
}