<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_01_04_173148_create_admin_tables',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2017_07_17_040159_create_config_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2022_03_11_195906_create_destitutes_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2022_03_11_220616_create_help_givens_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2022_03_12_154348_create_categories_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2022_03_12_162815_create_stocks_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2022_03_18_185737_create_destitute_categories_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2022_03_18_194927_create_destitute_destitute_categories_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2022_03_19_101032_create_volunteer_categories_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2022_03_19_101601_create_volunteers_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2022_03_19_101825_create_volunteer_volunteer_categories_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2022_04_08_212054_create_refugee_shelters_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2022_04_08_212620_create_border_crossing_options_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2022_05_03_115243_fit_comment_to_reference',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2022_05_03_115244_add_comment copy',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2022_05_03_115245_make_comment_nullable',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2022_07_06_203237_add_birth_date_to_destitutes',
                'batch' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2022_07_07_171213_add_soft_deletes_to_destitutes',
                'batch' => 3,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2022_07_07_185537_create_regions_table',
                'batch' => 4,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2022_07_07_191439_add_region_id_to_destitutes',
                'batch' => 5,
            ),
        ));

        
    }
}