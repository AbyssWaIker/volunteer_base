<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DestituteCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('destitute_categories')->delete();
        
        \DB::table('destitute_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Инвалид',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Многодетная семья/мать',
            ),
            2 => 
            array (
                'id' => 11,
                'name' => 'Нужно жилье',
            ),
            3 => 
            array (
                'id' => 2,
                'name' => 'Пенсионер',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'переселенцы',
            ),
            5 => 
            array (
                'id' => 3,
                'name' => 'Родитель одиночка',
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'Хотят выехать',
            ),
        ));

        
    }
}