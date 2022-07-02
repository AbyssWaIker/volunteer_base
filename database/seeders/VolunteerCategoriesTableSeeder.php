<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VolunteerCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('volunteer_categories')->delete();
        
        \DB::table('volunteer_categories')->insert(array (
            0 => 
            array (
                'id' => 12,
                'name' => 'швея',
                'created_at' => '2022-03-20 12:03:52',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 18,
            ),
            1 => 
            array (
                'id' => 13,
                'name' => 'Врач',
                'created_at' => '2022-03-20 12:05:36',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 19,
            ),
            2 => 
            array (
                'id' => 16,
                'name' => 'Юрист',
                'created_at' => '2022-03-20 13:36:17',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 20,
            ),
            3 => 
            array (
                'id' => 17,
            'name' => 'квартира (по одессе)',
                'created_at' => '2022-03-21 08:24:55',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 21,
            ),
            4 => 
            array (
                'id' => 18,
                'name' => 'Ремонт Техники',
                'created_at' => '2022-03-21 08:26:12',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 22,
            ),
            5 => 
            array (
                'id' => 20,
                'name' => 'Парихмер',
                'created_at' => '2022-03-21 08:54:14',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 23,
            ),
            6 => 
            array (
                'id' => 22,
                'name' => 'Электрик',
                'created_at' => '2022-03-21 11:16:11',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 24,
            ),
            7 => 
            array (
                'id' => 23,
                'name' => 'меценат',
                'created_at' => '2022-04-02 09:11:06',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 25,
            ),
            8 => 
            array (
                'id' => 24,
                'name' => 'Лекарства',
                'created_at' => '2022-04-02 10:35:54',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 26,
            ),
            9 => 
            array (
                'id' => 26,
            'name' => 'квартира (по украине)',
                'created_at' => '2022-04-07 11:52:37',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 27,
            ),
            10 => 
            array (
                'id' => 27,
                'name' => 'Вывоз за границу',
                'created_at' => '2022-04-07 11:52:57',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 28,
            ),
            11 => 
            array (
                'id' => 1,
            'name' => 'Руки (не назначено)',
                'created_at' => '2022-03-19 12:03:04',
                'updated_at' => '2022-07-02 13:27:12',
                'parent_id' => 0,
                'order' => 1,
            ),
            12 => 
            array (
                'id' => 10,
            'name' => 'Руки (Без Тяжелого)',
                'created_at' => '2022-03-20 11:58:27',
                'updated_at' => '2022-07-02 13:27:26',
                'parent_id' => 1,
                'order' => 2,
            ),
            13 => 
            array (
                'id' => 25,
                'name' => 'Администратор',
                'created_at' => '2022-04-04 13:27:11',
                'updated_at' => '2022-07-02 13:27:26',
                'parent_id' => 0,
                'order' => 3,
            ),
            14 => 
            array (
                'id' => 2,
                'name' => 'Повар',
                'created_at' => '2022-03-19 12:03:12',
                'updated_at' => '2022-07-02 13:27:26',
                'parent_id' => 0,
                'order' => 4,
            ),
            15 => 
            array (
                'id' => 3,
                'name' => 'Одежда',
                'created_at' => '2022-03-19 12:03:17',
                'updated_at' => '2022-07-02 13:27:26',
                'parent_id' => 0,
                'order' => 5,
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'Вещи',
                'created_at' => '2022-03-21 10:24:21',
                'updated_at' => '2022-07-02 13:27:26',
                'parent_id' => 0,
                'order' => 6,
            ),
            17 => 
            array (
                'id' => 29,
                'name' => 'гигиена',
                'created_at' => '2022-07-02 13:28:06',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 7,
            ),
            18 => 
            array (
                'id' => 28,
                'name' => 'машина',
                'created_at' => '2022-07-02 11:55:07',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 8,
            ),
            19 => 
            array (
                'id' => 4,
            'name' => 'Машина (Легковая)',
                'created_at' => '2022-03-19 12:03:51',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 28,
                'order' => 9,
            ),
            20 => 
            array (
                'id' => 5,
            'name' => 'Машина (Бус)',
                'created_at' => '2022-03-19 12:03:59',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 28,
                'order' => 10,
            ),
            21 => 
            array (
                'id' => 6,
            'name' => 'Машина (Грузовая)',
                'created_at' => '2022-03-19 12:04:12',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 28,
                'order' => 11,
            ),
            22 => 
            array (
                'id' => 8,
            'name' => 'Машина (Область)',
                'created_at' => '2022-03-19 12:04:29',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 28,
                'order' => 12,
            ),
            23 => 
            array (
                'id' => 9,
            'name' => 'Машина (Пассажирская)',
                'created_at' => '2022-03-20 11:49:09',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 28,
                'order' => 13,
            ),
            24 => 
            array (
                'id' => 15,
            'name' => 'Машина (николаев)',
                'created_at' => '2022-03-20 12:49:09',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 28,
                'order' => 14,
            ),
            25 => 
            array (
                'id' => 19,
            'name' => 'Водитель (без машины)',
                'created_at' => '2022-03-21 08:47:07',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 28,
                'order' => 15,
            ),
            26 => 
            array (
                'id' => 14,
                'name' => 'Инженер-механик',
                'created_at' => '2022-03-20 12:28:21',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 16,
            ),
            27 => 
            array (
                'id' => 11,
                'name' => 'Продукты',
                'created_at' => '2022-03-20 12:02:33',
                'updated_at' => '2022-07-02 13:28:18',
                'parent_id' => 0,
                'order' => 17,
            ),
        ));

        
    }
}