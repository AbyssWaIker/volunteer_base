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
                'parent_id' => NULL,
                'order' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Многодетная семья/мать',
                'enabled' => true,
                'parent_id' => NULL,
                'order' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'name' => 'Нужно жилье',
                'enabled' => true,
                'parent_id' => NULL,
                'order' => NULL,
            ),
            3 => 
            array (
                'id' => 2,
                'name' => 'Пенсионер',
                'enabled' => true,
                'parent_id' => NULL,
                'order' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'переселенцы',
                'enabled' => true,
                'parent_id' => NULL,
                'order' => NULL,
            ),
            5 => 
            array (
                'id' => 3,
                'name' => 'Родитель одиночка',
                'enabled' => true,
                'parent_id' => NULL,
                'order' => NULL,
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'Хотят выехать',
                'enabled' => true,
                'parent_id' => NULL,
                'order' => NULL,
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'Военные',
                'enabled' => true,
                'parent_id' => NULL,
                'order' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'Передача посылкой',
                'enabled' => true,
                'parent_id' => NULL,
                'order' => NULL,
            ),
        ));

        
    }
}