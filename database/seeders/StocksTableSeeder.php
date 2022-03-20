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
                'deficit_count_since_last_replenishment' => 6,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-20 08:16:10',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Кефир',
                'deficit_status' => 2,
                'deficit_count_since_last_replenishment' => 6,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-20 08:16:10',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Йогурт',
                'deficit_status' => 2,
                'deficit_count_since_last_replenishment' => 2,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 08:18:51',
                'updated_at' => '2022-03-20 08:16:10',
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
            42 => 
            array (
                'id' => 43,
                'name' => 'Мандарины',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 14:40:54',
                'updated_at' => '2022-03-19 14:40:54',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Сок',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 14:40:54',
                'updated_at' => '2022-03-19 14:40:54',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Шоколадки',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-19 14:40:54',
                'updated_at' => '2022-03-19 14:40:54',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Макароны',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:32:58',
                'updated_at' => '2022-03-20 07:32:58',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Пшено',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:32:58',
                'updated_at' => '2022-03-20 07:32:58',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Гречка',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:32:58',
                'updated_at' => '2022-03-20 07:32:58',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Овсянка',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:32:58',
                'updated_at' => '2022-03-20 07:32:58',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Масло',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:41:59',
                'updated_at' => '2022-03-20 07:41:59',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Перец мрия',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Паприка мрия',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Приправа мивина куриная',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Приправа грибная мивина',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Приправа мясная мивина',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Приправа куриная мивина',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Мивина',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Сырки плавленые',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:48:27',
                'updated_at' => '2022-03-20 07:48:27',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Мясо',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:49:04',
                'updated_at' => '2022-03-20 07:49:04',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Компот',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:52:24',
                'updated_at' => '2022-03-20 07:52:24',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Сгущенка',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:53:21',
                'updated_at' => '2022-03-20 07:53:21',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Консервы аквамарин',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:56:58',
                'updated_at' => '2022-03-20 07:56:58',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Консервы рисовые с бараниной',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:56:58',
                'updated_at' => '2022-03-20 07:56:58',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Сухие супы',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 07:59:47',
                'updated_at' => '2022-03-20 07:59:47',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Сало',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 08:01:25',
                'updated_at' => '2022-03-20 08:01:25',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Мясо вяленое',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 08:02:31',
                'updated_at' => '2022-03-20 08:02:31',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Газировка',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 08:06:08',
                'updated_at' => '2022-03-20 08:06:08',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Сухпайки',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 08:10:18',
                'updated_at' => '2022-03-20 08:10:18',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Сахар рафинад',
                'deficit_status' => 2,
                'deficit_count_since_last_replenishment' => 2,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 08:15:52',
                'updated_at' => '2022-03-20 08:16:10',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Халва',
                'deficit_status' => 2,
                'deficit_count_since_last_replenishment' => 3,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 08:15:52',
                'updated_at' => '2022-03-20 08:18:01',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Текст',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 08:15:52',
                'updated_at' => '2022-03-20 08:15:52',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Соки',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 08:18:00',
                'updated_at' => '2022-03-20 08:18:00',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Суп сухой',
                'deficit_status' => 0,
                'deficit_count_since_last_replenishment' => 0,
                'stock_category_id' => NULL,
                'created_at' => '2022-03-20 09:07:13',
                'updated_at' => '2022-03-20 09:07:13',
            ),
        ));

        
    }
}