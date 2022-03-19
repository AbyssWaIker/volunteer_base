<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stocks')->delete();
        
        \DB::table('stocks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Печенье, сладкое',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-18 08:41:33',
                'updated_at' => '2022-03-18 08:41:33',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'хлеб',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-18 08:41:33',
                'updated_at' => '2022-03-18 08:41:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Яблоки',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-18 11:53:20',
                'updated_at' => '2022-03-18 11:53:20',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Печенья',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-18 11:53:20',
                'updated_at' => '2022-03-18 11:53:20',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Печенье и шоколадки',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:13:40',
                'updated_at' => '2022-03-19 08:13:40',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Сахар',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:13:40',
                'updated_at' => '2022-03-19 08:13:40',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Кофе',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:13:40',
                'updated_at' => '2022-03-19 08:13:40',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Тушенка',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:13:40',
                'updated_at' => '2022-03-19 08:13:40',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Булочки',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:16:14',
                'updated_at' => '2022-03-19 08:16:14',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Сок capri-sun',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:16:14',
                'updated_at' => '2022-03-19 08:16:14',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Сок садочок',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:16:14',
                'updated_at' => '2022-03-19 08:16:14',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Бананы',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:16:14',
                'updated_at' => '2022-03-19 08:16:14',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Консервы рыбные',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:16:14',
                'updated_at' => '2022-03-19 08:16:14',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Сметана',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:18:51',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Апельсины',
                'deficit_status' => 2,
                'deficit_count_since_last_replenishment' => 4,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:46:51',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Кефир',
                'deficit_status' => 2,
                'deficit_count_since_last_replenishment' => 4,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:46:51',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Йогурт',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:18:51',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Молоко',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:18:51',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Чай',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:18:51',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Сок Rich',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-19 08:18:51',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Вяленое мясо',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:20:17',
                'updated_at' => '2022-03-19 08:20:17',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Сосиски',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:20:17',
                'updated_at' => '2022-03-19 08:20:17',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Сардельки',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:20:17',
                'updated_at' => '2022-03-19 08:20:17',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Микс',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:26:57',
                'updated_at' => '2022-03-19 08:26:57',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Кислая капуста',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:47:41',
                'updated_at' => '2022-03-19 08:47:41',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Яйца',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:39:37',
                'updated_at' => '2022-03-19 09:39:37',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Консервы домашние',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:39:37',
                'updated_at' => '2022-03-19 09:39:37',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Крабовый склад',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:39:37',
                'updated_at' => '2022-03-19 09:39:37',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Плавленный сырок, сосиски,',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:39:37',
                'updated_at' => '2022-03-19 09:39:37',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Чай, кофе',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:39:37',
                'updated_at' => '2022-03-19 09:39:37',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Лук',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:43:29',
                'updated_at' => '2022-03-19 09:43:29',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Картошка',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:46:55',
                'updated_at' => '2022-03-19 09:46:55',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Фасоль',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:48:31',
                'updated_at' => '2022-03-19 09:48:31',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Соц. Набор',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:50:25',
                'updated_at' => '2022-03-19 09:50:25',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Лимоны',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:54:19',
                'updated_at' => '2022-03-19 09:54:19',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Печенье',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:55:18',
                'updated_at' => '2022-03-19 09:55:18',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Капуста',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 09:57:52',
                'updated_at' => '2022-03-19 09:57:52',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Вода',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 11:36:50',
                'updated_at' => '2022-03-19 11:36:50',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'буряк',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 11:36:50',
                'updated_at' => '2022-03-19 11:36:50',
            ),
            39 => 
            array (
                'id' => 40,
            'name' => 'Лук, картошка, буряк, капуста (1 качан)',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 12:14:42',
                'updated_at' => '2022-03-19 12:14:42',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Социальный набор',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 12:14:42',
                'updated_at' => '2022-03-19 12:14:42',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Картошка, морковка, лук, буряк',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 12:16:49',
                'updated_at' => '2022-03-19 12:16:49',
            ),
        ));

        
    }
}