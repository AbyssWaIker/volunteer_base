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
                'id' => 10,
            'name' => 'Руки (Без Тяжелого)',
                'created_at' => '2022-03-20 11:58:27',
                'updated_at' => '2022-07-02 13:27:26',
                'parent_id' => 1,
                'order' => 2,
            ),
            1 => 
            array (
                'id' => 18,
                'name' => 'Ремонт Техники',
                'created_at' => '2022-03-21 08:26:12',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 0,
                'order' => 22,
            ),
            2 => 
            array (
                'id' => 20,
                'name' => 'Парихмер',
                'created_at' => '2022-03-21 08:54:14',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 0,
                'order' => 23,
            ),
            3 => 
            array (
                'id' => 22,
                'name' => 'Электрик',
                'created_at' => '2022-03-21 11:16:11',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 0,
                'order' => 24,
            ),
            4 => 
            array (
                'id' => 23,
                'name' => 'меценат',
                'created_at' => '2022-04-02 09:11:06',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 0,
                'order' => 25,
            ),
            5 => 
            array (
                'id' => 21,
                'name' => 'Вещи',
                'created_at' => '2022-03-21 10:24:21',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 23,
                'order' => 26,
            ),
            6 => 
            array (
                'id' => 24,
                'name' => 'Лекарства',
                'created_at' => '2022-04-02 10:35:54',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 23,
                'order' => 27,
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Продукты',
                'created_at' => '2022-03-20 12:02:33',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 23,
                'order' => 28,
            ),
            8 => 
            array (
                'id' => 17,
            'name' => 'квартира (по одессе)',
                'created_at' => '2022-03-21 08:24:55',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 23,
                'order' => 29,
            ),
            9 => 
            array (
                'id' => 26,
            'name' => 'квартира (по украине)',
                'created_at' => '2022-04-07 11:52:37',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 23,
                'order' => 30,
            ),
            10 => 
            array (
                'id' => 27,
                'name' => 'Вывоз за границу',
                'created_at' => '2022-04-07 11:52:57',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 23,
                'order' => 31,
            ),
            11 => 
            array (
                'id' => 1,
            'name' => 'Не назначено (руки)',
                'created_at' => '2022-03-19 12:03:04',
                'updated_at' => '2022-07-03 21:50:06',
                'parent_id' => 0,
                'order' => 1,
            ),
            12 => 
            array (
                'id' => 28,
            'name' => 'Логистика (Водители)',
                'created_at' => '2022-07-02 11:55:07',
                'updated_at' => '2022-07-03 21:54:45',
                'parent_id' => 0,
                'order' => 11,
            ),
            13 => 
            array (
                'id' => 30,
                'name' => 'Медицина',
                'created_at' => '2022-07-03 21:47:19',
                'updated_at' => '2022-07-03 21:57:10',
                'parent_id' => 0,
                'order' => 5,
            ),
            14 => 
            array (
                'id' => 29,
                'name' => 'гигиена',
                'created_at' => '2022-07-02 13:28:06',
                'updated_at' => '2022-07-03 21:57:10',
                'parent_id' => 0,
                'order' => 6,
            ),
            15 => 
            array (
                'id' => 33,
                'name' => 'Склад продуктов',
                'created_at' => '2022-07-03 21:49:19',
                'updated_at' => '2022-07-03 21:57:10',
                'parent_id' => 0,
                'order' => 7,
            ),
            16 => 
            array (
                'id' => 2,
            'name' => 'Кухня (Повара)',
                'created_at' => '2022-03-19 12:03:12',
                'updated_at' => '2022-07-03 21:57:10',
                'parent_id' => 0,
                'order' => 8,
            ),
            17 => 
            array (
                'id' => 3,
                'name' => 'Склад одежды',
                'created_at' => '2022-03-19 12:03:17',
                'updated_at' => '2022-07-03 21:57:10',
                'parent_id' => 0,
                'order' => 9,
            ),
            18 => 
            array (
                'id' => 12,
                'name' => 'швея',
                'created_at' => '2022-03-20 12:03:52',
                'updated_at' => '2022-07-03 21:57:10',
                'parent_id' => 3,
                'order' => 10,
            ),
            19 => 
            array (
                'id' => 34,
                'name' => 'Штаб/Офис',
                'created_at' => '2022-07-03 21:49:51',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 0,
                'order' => 3,
            ),
            20 => 
            array (
                'id' => 25,
            'name' => 'Администраторы (Рецепшен)',
                'created_at' => '2022-04-04 13:27:11',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 0,
                'order' => 4,
            ),
            21 => 
            array (
                'id' => 4,
            'name' => 'Машина (Легковая)',
                'created_at' => '2022-03-19 12:03:51',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 28,
                'order' => 12,
            ),
            22 => 
            array (
                'id' => 5,
            'name' => 'Машина (Бус)',
                'created_at' => '2022-03-19 12:03:59',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 28,
                'order' => 13,
            ),
            23 => 
            array (
                'id' => 6,
            'name' => 'Машина (Грузовая)',
                'created_at' => '2022-03-19 12:04:12',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 28,
                'order' => 14,
            ),
            24 => 
            array (
                'id' => 8,
            'name' => 'Машина (Область)',
                'created_at' => '2022-03-19 12:04:29',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 28,
                'order' => 15,
            ),
            25 => 
            array (
                'id' => 9,
            'name' => 'Машина (Пассажирская)',
                'created_at' => '2022-03-20 11:49:09',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 28,
                'order' => 16,
            ),
            26 => 
            array (
                'id' => 15,
            'name' => 'Машина (николаев)',
                'created_at' => '2022-03-20 12:49:09',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 28,
                'order' => 17,
            ),
            27 => 
            array (
                'id' => 19,
            'name' => 'Водитель (без машины)',
                'created_at' => '2022-03-21 08:47:07',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 28,
                'order' => 18,
            ),
            28 => 
            array (
                'id' => 14,
                'name' => 'Инженер-механик',
                'created_at' => '2022-03-20 12:28:21',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 0,
                'order' => 19,
            ),
            29 => 
            array (
                'id' => 13,
                'name' => 'Врач',
                'created_at' => '2022-03-20 12:05:36',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 0,
                'order' => 20,
            ),
            30 => 
            array (
                'id' => 16,
                'name' => 'Юрист',
                'created_at' => '2022-03-20 13:36:17',
                'updated_at' => '2022-07-03 21:49:56',
                'parent_id' => 0,
                'order' => 21,
            ),
            31 => 
            array (
                'id' => 35,
                'name' => 'Детские праздники',
                'created_at' => '2022-07-13 16:42:17',
                'updated_at' => '2022-07-13 16:42:20',
                'parent_id' => 34,
                'order' => 1,
            ),
            32 => 
            array (
                'id' => 36,
                'name' => 'Закупка',
                'created_at' => '2022-07-13 16:42:17',
                'updated_at' => '2022-07-13 16:42:17',
                'parent_id' => 34,
                'order' => 2,
            ),
            33 => 
            array (
                'id' => 37,
                'name' => 'массаж',
                'created_at' => NULL,
                'updated_at' => NULL,
                'parent_id' => NULL,
                'order' => NULL,
            ),
        ));

        
    }
}