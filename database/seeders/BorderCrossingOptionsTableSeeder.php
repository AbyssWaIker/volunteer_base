<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BorderCrossingOptionsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('border_crossing_options')->delete();
        
        \DB::table('border_crossing_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Сергей Пархист Логист',
                'contact' => '0674802925',
                'country' => 'польша',
                'time_of_crossing' => NULL,
                'vacant_places' => NULL,
                'comment' => NULL,
                'created_at' => '2022-04-09 09:34:17',
                'updated_at' => '2022-04-10 11:25:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'тамара',
                'contact' => '0972964349',
                'country' => 'граница молдавии',
                'time_of_crossing' => NULL,
                'vacant_places' => NULL,
                'comment' => NULL,
                'created_at' => '2022-04-09 09:35:37',
                'updated_at' => '2022-04-09 09:35:37',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '-',
                'contact' => '0930975397',
                'country' => 'Чехия, Словакия',
                'time_of_crossing' => NULL,
                'vacant_places' => NULL,
                'comment' => NULL,
                'created_at' => '2022-04-10 11:25:13',
                'updated_at' => '2022-04-10 11:25:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '_',
                'contact' => '380685362134, 0963728963',
            'country' => 'Украина (орловка)',
                'time_of_crossing' => 'ежедневно',
                'vacant_places' => 'мамочкам с деьтми, пожилым людям, старикам',
                'comment' => 'заявки по предварительной записи',
                'created_at' => '2022-04-13 21:07:53',
                'updated_at' => '2022-04-13 21:07:53',
            ),
        ));

        
    }
}