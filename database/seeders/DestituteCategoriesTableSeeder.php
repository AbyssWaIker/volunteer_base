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
                'enabled' => true,
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Многодетная семья/мать',
                'enabled' => true,
            ),
            2 => 
            array (
                'id' => 11,
                'name' => 'Нужно жилье',
                'enabled' => true,
            ),
            3 => 
            array (
                'id' => 2,
                'name' => 'Пенсионер',
                'enabled' => true,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'переселенцы',
                'enabled' => true,
            ),
            5 => 
            array (
                'id' => 3,
                'name' => 'Родитель одиночка',
                'enabled' => true,
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'Хотят выехать',
                'enabled' => true,
            ),
        ));

        
    }
}