<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GranniesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grannies')->delete();
        
        \DB::table('grannies')->insert(array (
            0 => 
            array (
                'id' => 496,
                'granny_name' => 'Коренчук Татьяна Андреевна',
                'address' => 'Франц.бул 16, кв. 135',
                'granny_phone' => '7727003',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:10',
                'updated_at' => '2022-03-14 15:34:10',
            ),
            1 => 
            array (
                'id' => 497,
                'granny_name' => 'Карпов Олег Петрович',
                'address' => NULL,
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:10',
                'updated_at' => '2022-03-14 15:34:10',
            ),
            2 => 
            array (
                'id' => 498,
                'granny_name' => 'Карпова Таисия Ивановна',
                'address' => 'Франц.бул. 11/172',
                'granny_phone' => '0983665812',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:11',
                'updated_at' => '2022-03-14 15:34:11',
            ),
            3 => 
            array (
                'id' => 499,
                'granny_name' => 'Марина Георгиевна',
                'address' => NULL,
                'granny_phone' => '0973735517',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:11',
                'updated_at' => '2022-03-14 15:34:11',
            ),
            4 => 
            array (
                'id' => 500,
            'granny_name' => 'Байличук Анатолий (2 чел)',
                'address' => NULL,
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:11',
                'updated_at' => '2022-03-14 15:34:11',
            ),
            5 => 
            array (
                'id' => 501,
                'granny_name' => 'Лидия',
                'address' => NULL,
                'granny_phone' => '0681472141',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:11',
                'updated_at' => '2022-03-14 15:34:11',
            ),
            6 => 
            array (
                'id' => 502,
                'granny_name' => 'Галина',
                'address' => NULL,
                'granny_phone' => '0987880663',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:12',
                'updated_at' => '2022-03-14 15:34:12',
            ),
            7 => 
            array (
                'id' => 503,
                'granny_name' => 'Сергей',
                'address' => NULL,
                'granny_phone' => '0487010117',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:12',
                'updated_at' => '2022-03-14 15:34:12',
            ),
            8 => 
            array (
                'id' => 504,
                'granny_name' => 'Дора',
                'address' => NULL,
                'granny_phone' => '0965879088',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:12',
                'updated_at' => '2022-03-14 15:34:12',
            ),
            9 => 
            array (
                'id' => 505,
            'granny_name' => 'Рихтер Раиса Сергеевна (6 чел)',
                'address' => 'Хаджибеевская дорога 241 б',
                'granny_phone' => '0685882337',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:12',
                'updated_at' => '2022-03-14 15:34:12',
            ),
            10 => 
            array (
                'id' => 506,
                'granny_name' => 'Гусева Надежда Филипповна',
                'address' => 'Французский бул. 16/140',
                'granny_phone' => '0972478900',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:12',
                'updated_at' => '2022-03-14 15:34:12',
            ),
            11 => 
            array (
                'id' => 507,
                'granny_name' => 'Пошагор Алла Николаевна',
                'address' => NULL,
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:13',
                'updated_at' => '2022-03-14 15:34:13',
            ),
            12 => 
            array (
                'id' => 508,
                'granny_name' => 'Любовь Александровна',
                'address' => 'Французский бул. 16/175',
                'granny_phone' => '7838636',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:13',
                'updated_at' => '2022-03-14 15:34:13',
            ),
            13 => 
            array (
                'id' => 509,
                'granny_name' => 'Григорова Марина Николаевна',
                'address' => 'пр. Шевченко 11а, кв. 36',
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:13',
                'updated_at' => '2022-03-14 15:34:13',
            ),
            14 => 
            array (
                'id' => 510,
                'granny_name' => 'Коренчук Татьтяна Валерьивна',
                'address' => 'Французкий бульвар 16 кв 135',
                'granny_phone' => '7727003',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:13',
                'updated_at' => '2022-03-14 15:34:13',
            ),
            15 => 
            array (
                'id' => 511,
                'granny_name' => 'Карпов Олег Петрович',
                'address' => 'Французкий бульвар 116/172',
                'granny_phone' => '0983665812',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:14',
                'updated_at' => '2022-03-14 15:34:14',
            ),
            16 => 
            array (
                'id' => 512,
                'granny_name' => 'Карпова Татьяна Ивановна',
                'address' => 'Французкий бульвар 116/172',
                'granny_phone' => '0983665812',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:14',
                'updated_at' => '2022-03-14 15:34:14',
            ),
            17 => 
            array (
                'id' => 513,
                'granny_name' => 'Марина Георгиевна',
                'address' => NULL,
                'granny_phone' => '0973735517',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:14',
                'updated_at' => '2022-03-14 15:34:14',
            ),
            18 => 
            array (
                'id' => 514,
                'granny_name' => 'Байпчук Толя, 2 человек',
                'address' => NULL,
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:14',
                'updated_at' => '2022-03-14 15:34:14',
            ),
            19 => 
            array (
                'id' => 515,
                'granny_name' => 'Бабушка Лида',
                'address' => NULL,
                'granny_phone' => '0681472141',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:14',
                'updated_at' => '2022-03-14 15:34:14',
            ),
            20 => 
            array (
                'id' => 516,
                'granny_name' => 'Пенсион Лидия',
                'address' => NULL,
                'granny_phone' => '0681472141',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:15',
                'updated_at' => '2022-03-14 15:34:15',
            ),
            21 => 
            array (
                'id' => 517,
                'granny_name' => 'Пенсион Галя',
                'address' => NULL,
                'granny_phone' => '0987880663',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:15',
                'updated_at' => '2022-03-14 15:34:15',
            ),
            22 => 
            array (
                'id' => 518,
                'granny_name' => 'Пенсион Сергей',
                'address' => NULL,
                'granny_phone' => '0487010117',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:15',
                'updated_at' => '2022-03-14 15:34:15',
            ),
            23 => 
            array (
                'id' => 519,
                'granny_name' => 'Пенсион Дора',
                'address' => NULL,
                'granny_phone' => '0965879088',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:15',
                'updated_at' => '2022-03-14 15:34:15',
            ),
            24 => 
            array (
                'id' => 520,
                'granny_name' => 'Рихтер Раиса Сергеевна',
                'address' => 'Хаджибейская дорога 241б',
                'granny_phone' => '0685882337',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:16',
                'updated_at' => '2022-03-14 15:34:16',
            ),
            25 => 
            array (
                'id' => 521,
                'granny_name' => 'Гусеева Надежда Филиповна',
                'address' => 'Французкий бульвар 16/140',
                'granny_phone' => '0972478900',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:16',
                'updated_at' => '2022-03-14 15:34:16',
            ),
            26 => 
            array (
                'id' => 522,
                'granny_name' => 'Любовь Олександровна',
                'address' => 'Французкий бульвар 16 кв 175',
                'granny_phone' => '7838636',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:16',
                'updated_at' => '2022-03-14 15:34:16',
            ),
            27 => 
            array (
                'id' => 523,
            'granny_name' => 'Григорьевна Марина Николаевна (пенсионер)',
                'address' => 'проспект Шевченка 11а кв 36',
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:16',
                'updated_at' => '2022-03-14 15:34:16',
            ),
            28 => 
            array (
                'id' => 524,
                'granny_name' => 'Мам + реб 1,3',
                'address' => 'Филатова 2',
                'granny_phone' => '0689665616',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:16',
                'updated_at' => '2022-03-14 15:34:16',
            ),
            29 => 
            array (
                'id' => 525,
                'granny_name' => 'Бабуля Юлиана',
                'address' => 'Ринат 46 кв 83',
                'granny_phone' => '0939692481',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:17',
                'updated_at' => '2022-03-14 15:34:17',
            ),
            30 => 
            array (
                'id' => 526,
                'granny_name' => 'Юлиана',
                'address' => 'Филатова 46, кв.83',
                'granny_phone' => '0939692481',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:17',
                'updated_at' => '2022-03-14 15:34:17',
            ),
            31 => 
            array (
                'id' => 527,
                'granny_name' => 'Маслова Елена Владимировна',
                'address' => NULL,
                'granny_phone' => '0938494335',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:17',
                'updated_at' => '2022-03-14 15:34:17',
            ),
            32 => 
            array (
                'id' => 528,
                'granny_name' => 'Василовна Валентина Викторовна',
                'address' => NULL,
                'granny_phone' => '0731338161',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:17',
                'updated_at' => '2022-03-14 15:34:17',
            ),
            33 => 
            array (
                'id' => 529,
                'granny_name' => 'Тимофеевна Наталья Николаевна',
                'address' => NULL,
                'granny_phone' => '067631662',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:18',
                'updated_at' => '2022-03-14 15:34:18',
            ),
            34 => 
            array (
                'id' => 530,
                'granny_name' => 'Гусеева НадеждаФиннит',
                'address' => NULL,
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:18',
                'updated_at' => '2022-03-14 15:34:18',
            ),
            35 => 
            array (
                'id' => 531,
                'granny_name' => 'Пошагор Анна Кин',
                'address' => NULL,
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:18',
                'updated_at' => '2022-03-14 15:34:18',
            ),
            36 => 
            array (
                'id' => 532,
                'granny_name' => 'Маслова Елена Владимировна',
                'address' => NULL,
                'granny_phone' => '0938494335',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:18',
                'updated_at' => '2022-03-14 15:34:18',
            ),
            37 => 
            array (
                'id' => 533,
                'granny_name' => 'Васильева Валентина Викторовна',
                'address' => NULL,
                'granny_phone' => '0731338161',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:18',
                'updated_at' => '2022-03-14 15:34:18',
            ),
            38 => 
            array (
                'id' => 534,
                'granny_name' => 'Тимофеева Наталья Николаевна',
                'address' => NULL,
                'granny_phone' => '0676316662',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:19',
                'updated_at' => '2022-03-14 15:34:19',
            ),
            39 => 
            array (
                'id' => 535,
                'granny_name' => 'Приступ Анна Леонидовна',
                'address' => '6-я ст Люстдорфской дороги, 6 линия, д. 1',
            'granny_phone' => '0934272992 (Анастасия)',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:19',
                'updated_at' => '2022-03-14 15:34:19',
            ),
            40 => 
            array (
                'id' => 536,
                'granny_name' => 'Великсарова Татьяна Олександровна',
                'address' => 'Вильямса 59/8, кв.47',
                'granny_phone' => '0635741311',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:19',
                'updated_at' => '2022-03-14 15:34:19',
            ),
            41 => 
            array (
                'id' => 537,
                'granny_name' => 'Самарина Полина Антоновна',
                'address' => 'Крымский пер. 3',
                'granny_phone' => '0963694945',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:19',
                'updated_at' => '2022-03-14 15:34:19',
            ),
            42 => 
            array (
                'id' => 538,
                'granny_name' => 'Подиряко Людмила Германовна',
                'address' => 'Семинарская 1/3, кв.47',
                'granny_phone' => '0951986011',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:19',
                'updated_at' => '2022-03-14 15:34:19',
            ),
            43 => 
            array (
                'id' => 539,
                'granny_name' => 'Фищенко Валентина Леонтьевна',
                'address' => 'Строганова 26 в',
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:19',
                'updated_at' => '2022-03-14 15:34:19',
            ),
            44 => 
            array (
                'id' => 540,
                'granny_name' => 'Балыкин Василий Егорович',
                'address' => 'Французский бул 16, кв. 121',
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:20',
                'updated_at' => '2022-03-14 15:34:20',
            ),
            45 => 
            array (
                'id' => 541,
                'granny_name' => 'Воскресенская Наталья Александровна ',
                'address' => 'Мясоедовская 5, кв. 1',
                'granny_phone' => '0934795176',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:20',
                'updated_at' => '2022-03-14 15:34:20',
            ),
            46 => 
            array (
                'id' => 542,
                'granny_name' => 'Замятина Лидия Ивановна',
                'address' => 'Романа Кармена 8, кв. 4',
                'granny_phone' => '0506086949',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:20',
                'updated_at' => '2022-03-14 15:34:20',
            ),
            47 => 
            array (
                'id' => 543,
                'granny_name' => 'Дунаевская Вера Ивановна',
                'address' => 'Романа Кармена 8, кв. 13',
                'granny_phone' => '0630662314',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:20',
                'updated_at' => '2022-03-14 15:34:20',
            ),
            48 => 
            array (
                'id' => 544,
                'granny_name' => 'Турчак Ирина Анатольевна',
                'address' => 'Канатная 81, кв. 167',
                'granny_phone' => '0994798346',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:21',
                'updated_at' => '2022-03-14 15:34:21',
            ),
            49 => 
            array (
                'id' => 545,
                'granny_name' => 'Неяченко Людмила Вениаминовна',
                'address' => 'Романа Кармена 8, кв. 81',
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:21',
                'updated_at' => '2022-03-14 15:34:21',
            ),
            50 => 
            array (
                'id' => 546,
                'granny_name' => 'Салатенко Валентина Михайловна',
                'address' => 'Романа Кармена 8, кв.84',
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:21',
                'updated_at' => '2022-03-14 15:34:21',
            ),
            51 => 
            array (
                'id' => 547,
                'granny_name' => 'Смирнова Валентина Ивановна',
                'address' => 'Романа Кармена 8, кв. 88',
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:21',
                'updated_at' => '2022-03-14 15:34:21',
            ),
            52 => 
            array (
                'id' => 548,
                'granny_name' => 'Ергиева Вера Васильевна',
                'address' => 'Французский бул 16, кв. 47',
            'granny_phone' => '0972216511 (муж)',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:21',
                'updated_at' => '2022-03-14 15:34:21',
            ),
            53 => 
            array (
                'id' => 549,
                'granny_name' => 'Соловьева Лариса Александровна',
                'address' => 'Пироговский пер.6, кв.3',
                'granny_phone' => '0965846993',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:22',
                'updated_at' => '2022-03-14 15:34:22',
            ),
            54 => 
            array (
                'id' => 550,
                'granny_name' => 'Запорожец Лилия Александровна',
                'address' => 'Лазарева 3, кв.8',
                'granny_phone' => '0988695819',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:22',
                'updated_at' => '2022-03-14 15:34:22',
            ),
            55 => 
            array (
                'id' => 551,
                'granny_name' => 'Пейков Александр Петрович',
                'address' => 'Б.Арнаутская 79, кв.3а',
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:22',
                'updated_at' => '2022-03-14 15:34:22',
            ),
            56 => 
            array (
                'id' => 552,
                'granny_name' => 'Бровкина Галина Александровна',
                'address' => 'Французский бул. 16, кв. 49',
                'granny_phone' => NULL,
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:22',
                'updated_at' => '2022-03-14 15:34:22',
            ),
            57 => 
            array (
                'id' => 553,
                'granny_name' => 'Храновская Надежда Семеновна',
                'address' => 'Добровольского 147/1, кв. 102',
                'granny_phone' => '0674763318',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:23',
                'updated_at' => '2022-03-14 15:34:23',
            ),
            58 => 
            array (
                'id' => 554,
            'granny_name' => 'Федунова Тамар Федоровна (с 11.03)',
                'address' => 'Бунина 39/42 ',
                'granny_phone' => '0674918795',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:23',
                'updated_at' => '2022-03-14 15:34:23',
            ),
            59 => 
            array (
                'id' => 555,
                'granny_name' => 'Була Татьяна Михайловна',
                'address' => 'Семинарская 1/5 кв. 93',
                'granny_phone' => '0979971420',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:23',
                'updated_at' => '2022-03-14 15:34:23',
            ),
            60 => 
            array (
                'id' => 556,
                'granny_name' => 'Добровольская Галина Николаевна',
                'address' => 'Еврейская 42 кв24',
                'granny_phone' => '0961063356',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:23',
                'updated_at' => '2022-03-14 15:34:23',
            ),
            61 => 
            array (
                'id' => 557,
                'granny_name' => 'Панасюк Татьяна Васильевна',
                'address' => 'Фарнцузкий Бульвар дом 16 кв. 113',
                'granny_phone' => '0984406508',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:23',
                'updated_at' => '2022-03-14 15:34:23',
            ),
            62 => 
            array (
                'id' => 558,
                'granny_name' => 'Дружинина Ольга Михайловна',
                'address' => 'Фарнцузкий Бульвар дом 16 кв. 63',
                'granny_phone' => '0973739845',
                'passport_id' => '2049524786',
                'created_at' => '2022-03-14 15:34:24',
                'updated_at' => '2022-03-14 15:34:24',
            ),
            63 => 
            array (
                'id' => 559,
                'granny_name' => 'Усатюк Олександра Константиновна',
                'address' => 'Фарнцузкий Бульвар дом 16 кв. 4',
                'granny_phone' => '0963430374',
                'passport_id' => '',
                'created_at' => '2022-03-14 15:34:24',
                'updated_at' => '2022-03-14 15:34:24',
            ),
            64 => 
            array (
                'id' => 560,
                'granny_name' => 'Горлатенко Лариса Олексеевна',
                'address' => 'Сегецкая 12а',
                'granny_phone' => '0965818606',
                'passport_id' => '1889521126',
                'created_at' => '2022-03-14 15:34:24',
                'updated_at' => '2022-03-14 15:34:24',
            ),
            65 => 
            array (
                'id' => 561,
                'granny_name' => 'Ткаченко Светлана Николаевна',
                'address' => 'Сегецкая 12а кв 45',
                'granny_phone' => '0972801005',
                'passport_id' => 'ААС0041617',
                'created_at' => '2022-03-14 15:34:24',
                'updated_at' => '2022-03-14 15:34:24',
            ),
            66 => 
            array (
                'id' => 562,
                'granny_name' => 'Евдокимов Юрий Вячеславович',
                'address' => 'Проспект Шевченко 11а кв 53',
                'granny_phone' => '0680876181',
                'passport_id' => '1910411211',
                'created_at' => '2022-03-14 15:34:25',
                'updated_at' => '2022-03-14 15:34:25',
            ),
            67 => 
            array (
                'id' => 563,
                'granny_name' => 'Сивцова ветлана Григориевна',
                'address' => 'Троицкая 5 кв 31',
                'granny_phone' => '0971556855',
                'passport_id' => '1489410600',
                'created_at' => '2022-03-14 15:34:25',
                'updated_at' => '2022-03-14 15:34:25',
            ),
            68 => 
            array (
                'id' => 564,
                'granny_name' => 'Чернятынский Аркадий Сергеевич',
                'address' => 'Польская дом 17 кв 35',
                'granny_phone' => '0973267714',
                'passport_id' => '1443300775',
                'created_at' => '2022-03-14 15:34:25',
                'updated_at' => '2022-03-14 15:34:25',
            ),
            69 => 
            array (
                'id' => 565,
                'granny_name' => 'Самолий Валентина Денисовна',
                'address' => 'Французкий Бульвар12.кв7',
                'granny_phone' => '0674853641',
                'passport_id' => '271270',
                'created_at' => '2022-03-14 15:34:25',
                'updated_at' => '2022-03-14 15:34:25',
            ),
            70 => 
            array (
                'id' => 566,
                'granny_name' => 'WdbkЦвилюк Любовь Михайловна',
                'address' => 'Семинарская 1/5 кв 101',
                'granny_phone' => '0935870778',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:25',
                'updated_at' => '2022-03-14 15:34:25',
            ),
            71 => 
            array (
                'id' => 567,
                'granny_name' => 'Коваленко Наталья Николаевна',
                'address' => 'Семинарская 1/5 кв 100		
',
                'granny_phone' => '0687182400',
                'passport_id' => '1591904709',
                'created_at' => '2022-03-14 15:34:25',
                'updated_at' => '2022-03-14 15:34:25',
            ),
            72 => 
            array (
                'id' => 568,
                'granny_name' => 'Викаренко Лидия Семеновна',
                'address' => 'Французкий Бульвар 16 кв 148',
                'granny_phone' => '0673972123',
                'passport_id' => '1453212860',
                'created_at' => '2022-03-14 15:34:26',
                'updated_at' => '2022-03-14 15:34:26',
            ),
            73 => 
            array (
                'id' => 569,
                'granny_name' => 'Бондаренко Любовь Яковлевна',
                'address' => 'Базарная 29 кв 26',
                'granny_phone' => '0982636426',
                'passport_id' => '2049101960',
                'created_at' => '2022-03-14 15:34:26',
                'updated_at' => '2022-03-14 15:34:26',
            ),
            74 => 
            array (
                'id' => 570,
                'granny_name' => 'УсаткинаЛюдмила Васильевна',
                'address' => 'Базаная 34 кв 63',
                'granny_phone' => '0932781698',
                'passport_id' => '1584707543',
                'created_at' => '2022-03-14 15:34:26',
                'updated_at' => '2022-03-14 15:34:26',
            ),
            75 => 
            array (
                'id' => 571,
                'granny_name' => 'Остафьева Лора Рахимовна',
                'address' => 'проспект успенский 3/5',
                'granny_phone' => '0501755107ё',
                'passport_id' => '110636',
                'created_at' => '2022-03-14 15:34:26',
                'updated_at' => '2022-03-14 15:34:26',
            ),
            76 => 
            array (
                'id' => 572,
                'granny_name' => 'Коваленко Вера Николаевна',
                'address' => 'Канатная 19 кв 25',
                'granny_phone' => '0974097216',
                'passport_id' => '1934615005',
                'created_at' => '2022-03-14 15:34:26',
                'updated_at' => '2022-03-14 15:34:26',
            ),
            77 => 
            array (
                'id' => 573,
                'granny_name' => 'Кочемасова Катерина Николаевна',
                'address' => 'Транспортная 9 кв 121',
                'granny_phone' => '7969579',
                'passport_id' => '2240401640',
                'created_at' => '2022-03-14 15:34:27',
                'updated_at' => '2022-03-14 15:34:27',
            ),
            78 => 
            array (
                'id' => 574,
                'granny_name' => 'Литвиненко Любовь Ивановна',
                'address' => 'Французкий Бульвар 14 кв 14',
                'granny_phone' => '0982431361',
                'passport_id' => '2037909642',
                'created_at' => '2022-03-14 15:34:27',
                'updated_at' => '2022-03-14 15:34:27',
            ),
            79 => 
            array (
                'id' => 575,
                'granny_name' => 'Нестерович Ирина Викторовна',
                'address' => 'Проспект небесной Сотни 4а кв 88',
                'granny_phone' => '0636046924',
                'passport_id' => '202002304',
                'created_at' => '2022-03-14 15:34:27',
                'updated_at' => '2022-03-14 15:34:27',
            ),
            80 => 
            array (
                'id' => 576,
                'granny_name' => 'Омельяненко Любовь Олександровна',
                'address' => 'французкий бульвар 16 кв 175',
                'granny_phone' => '7838636',
                'passport_id' => '1501000023',
                'created_at' => '2022-03-14 15:34:27',
                'updated_at' => '2022-03-14 15:34:27',
            ),
            81 => 
            array (
                'id' => 577,
                'granny_name' => 'Курдюкова Инна Анатольевна',
                'address' => 'Успенская 4 кв 17',
                'granny_phone' => '0633996650',
                'passport_id' => '674',
                'created_at' => '2022-03-14 15:34:28',
                'updated_at' => '2022-03-14 15:34:28',
            ),
            82 => 
            array (
                'id' => 578,
                'granny_name' => 'Засыпкина Инна Ивановна',
                'address' => 'Переулок Светлый 2а кв 20',
                'granny_phone' => '0957688336',
                'passport_id' => '2089426623',
                'created_at' => '2022-03-14 15:34:28',
                'updated_at' => '2022-03-14 15:34:28',
            ),
            83 => 
            array (
                'id' => 579,
                'granny_name' => 'Филин Олександр Андреевич',
                'address' => 'Переулок Светлый 2а кв 21',
                'granny_phone' => '0683257302',
                'passport_id' => '2118893',
                'created_at' => '2022-03-14 15:34:28',
                'updated_at' => '2022-03-14 15:34:28',
            ),
            84 => 
            array (
                'id' => 580,
                'granny_name' => 'Засыпкин Сергей Владимирович',
                'address' => 'Переулок Светлый Квартира 20',
                'granny_phone' => '0683257302',
                'passport_id' => '009495',
                'created_at' => '2022-03-14 15:34:28',
                'updated_at' => '2022-03-14 15:34:28',
            ),
            85 => 
            array (
                'id' => 581,
                'granny_name' => 'Чаленко Неонила Марковна',
                'address' => 'Канатная 97 кв 7',
                'granny_phone' => '0983064537',
                'passport_id' => '1478619744',
                'created_at' => '2022-03-14 15:34:28',
                'updated_at' => '2022-03-14 15:34:28',
            ),
            86 => 
            array (
                'id' => 582,
                'granny_name' => 'Бадера Олександр Иванович',
                'address' => 'Канатная 50 кв 1',
                'granny_phone' => '0980217471',
                'passport_id' => '2200202342',
                'created_at' => '2022-03-14 15:34:29',
                'updated_at' => '2022-03-14 15:34:29',
            ),
            87 => 
            array (
                'id' => 583,
                'granny_name' => 'Максименко Лера Васильевна',
                'address' => 'Польский Спуск 19',
                'granny_phone' => '0973533682',
                'passport_id' => '251585',
                'created_at' => '2022-03-14 15:34:29',
                'updated_at' => '2022-03-14 15:34:29',
            ),
            88 => 
            array (
                'id' => 584,
                'granny_name' => 'Плотников Виктор Евгениевич',
                'address' => 'Французкая Дорога 39 кв 145',
                'granny_phone' => '0674369167',
                'passport_id' => '1923701756',
                'created_at' => '2022-03-14 15:34:29',
                'updated_at' => '2022-03-14 15:34:29',
            ),
            89 => 
            array (
                'id' => 585,
                'granny_name' => 'Кучина Тамара Петровна',
                'address' => 'Французкая Дорога 39 кв 143',
                'granny_phone' => '0963389997',
                'passport_id' => '1903302062',
                'created_at' => '2022-03-14 15:34:29',
                'updated_at' => '2022-03-14 15:34:29',
            ),
            90 => 
            array (
                'id' => 586,
                'granny_name' => 'Тихонова Наталья Георгиевна',
                'address' => 'Семинарская 12 кв 10',
                'granny_phone' => '0961632889',
                'passport_id' => '489282',
                'created_at' => '2022-03-14 15:34:29',
                'updated_at' => '2022-03-14 15:34:29',
            ),
            91 => 
            array (
                'id' => 587,
                'granny_name' => 'Ратчин Валерий Ильич',
                'address' => 'Переулок Светлый 7 квартира 57',
                'granny_phone' => '689651',
                'passport_id' => '1424637478',
                'created_at' => '2022-03-14 15:34:30',
                'updated_at' => '2022-03-14 15:34:30',
            ),
            92 => 
            array (
                'id' => 588,
                'granny_name' => 'Данченко Владимир Владимирович',
                'address' => 'Французкийбульвар 16 кв 53 ',
                'granny_phone' => '0677285652',
                'passport_id' => '498029',
                'created_at' => '2022-03-14 15:34:30',
                'updated_at' => '2022-03-14 15:34:30',
            ),
            93 => 
            array (
                'id' => 589,
                'granny_name' => 'Каширина Тамара Ивановна',
                'address' => 'Французкий Бульвар 14 кв 7',
                'granny_phone' => NULL,
                'passport_id' => '296509',
                'created_at' => '2022-03-14 15:34:30',
                'updated_at' => '2022-03-14 15:34:30',
            ),
            94 => 
            array (
                'id' => 590,
                'granny_name' => 'Вотинова Ирина Борисовна',
                'address' => 'Французкий Бульвар 14 кв 3',
                'granny_phone' => '0973302181',
                'passport_id' => '2171610320',
                'created_at' => '2022-03-14 15:34:30',
                'updated_at' => '2022-03-14 15:34:30',
            ),
            95 => 
            array (
                'id' => 591,
                'granny_name' => 'Сербовелик Мария Анатольевна',
                'address' => 'Сахарабина 2 кв 1',
                'granny_phone' => '06644416976',
                'passport_id' => '574279',
                'created_at' => '2022-03-14 15:34:30',
                'updated_at' => '2022-03-14 15:34:30',
            ),
            96 => 
            array (
                'id' => 592,
            'granny_name' => 'Замрикоза Алефтина Михайловна (с 12.03)',
                'address' => 'Базарная 28 кв 4',
                'granny_phone' => '0978582173',
                'passport_id' => '1622907704',
                'created_at' => '2022-03-14 15:34:31',
                'updated_at' => '2022-03-14 15:34:31',
            ),
            97 => 
            array (
                'id' => 593,
                'granny_name' => 'Суплева Зинаида Николаевна',
                'address' => 'Французкий Бульвар 20 кв 3',
                'granny_phone' => '0636003139',
                'passport_id' => 'ААА527379',
                'created_at' => '2022-03-14 15:34:31',
                'updated_at' => '2022-03-14 15:34:31',
            ),
            98 => 
            array (
                'id' => 594,
                'granny_name' => 'Никова Лариса Игнатеева',
                'address' => 'Люфсторская Дорога 123 квартира 46',
                'granny_phone' => '0973430033',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:31',
                'updated_at' => '2022-03-14 15:34:31',
            ),
            99 => 
            array (
                'id' => 595,
                'granny_name' => 'Карчаф Лидия Викторовна',
                'address' => 'Люфсторвская дорога 125 квартира 48',
                'granny_phone' => '0677304856',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:31',
                'updated_at' => '2022-03-14 15:34:31',
            ),
            100 => 
            array (
                'id' => 596,
                'granny_name' => 'Старинина Зоя Николаевна',
                'address' => 'Адмиральский проспект 1б квартира 24',
                'granny_phone' => '0938280319',
                'passport_id' => '198325722',
                'created_at' => '2022-03-14 15:34:31',
                'updated_at' => '2022-03-14 15:34:31',
            ),
            101 => 
            array (
                'id' => 597,
                'granny_name' => 'нехаенко игорь андреевич',
                'address' => 'Пионерская 11',
                'granny_phone' => '684841',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:32',
                'updated_at' => '2022-03-14 15:34:32',
            ),
            102 => 
            array (
                'id' => 598,
                'granny_name' => 'Влазнева яна владимировна ',
                'address' => 'проспект шевченка 7 кв 15',
                'granny_phone' => '0971113918',
                'passport_id' => '536894',
                'created_at' => '2022-03-14 15:34:32',
                'updated_at' => '2022-03-14 15:34:32',
            ),
            103 => 
            array (
                'id' => 599,
                'granny_name' => 'Валагурская Елена Владимировна',
                'address' => 'Семинарская 15а',
                'granny_phone' => '0933887775',
            'passport_id' => '2781310485 (инфалид)',
                'created_at' => '2022-03-14 15:34:32',
                'updated_at' => '2022-03-14 15:34:32',
            ),
            104 => 
            array (
                'id' => 600,
                'granny_name' => 'Мирошниченко Александр Васильевич',
                'address' => 'проспект шевченка 8в кв 55',
                'granny_phone' => '0633761048',
                'passport_id' => 'ААИ185913',
                'created_at' => '2022-03-14 15:34:32',
                'updated_at' => '2022-03-14 15:34:32',
            ),
            105 => 
            array (
                'id' => 601,
            'granny_name' => 'Валигурская Дарья Дмитриевна (ребенок инвалид)',
                'address' => 'Кузнечная 16 кв 17а',
                'granny_phone' => '0933234834',
                'passport_id' => '042779',
                'created_at' => '2022-03-14 15:34:32',
                'updated_at' => '2022-03-14 15:34:32',
            ),
            106 => 
            array (
                'id' => 602,
                'granny_name' => 'Жикал Ирина Григорьевна',
                'address' => 'Почтовая 7 кв 8',
                'granny_phone' => '0681285759',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:33',
                'updated_at' => '2022-03-14 15:34:33',
            ),
            107 => 
            array (
                'id' => 603,
                'granny_name' => 'Белоус Наталья Владимировна',
                'address' => 'Комарова 33',
                'granny_phone' => '0630282494',
                'passport_id' => '2050121764',
                'created_at' => '2022-03-14 15:34:33',
                'updated_at' => '2022-03-14 15:34:33',
            ),
            108 => 
            array (
                'id' => 604,
                'granny_name' => 'Головчук Валентина Николаевна',
                'address' => 'Лепши 3 кв 1',
                'granny_phone' => '0677329351',
                'passport_id' => '1983618485',
                'created_at' => '2022-03-14 15:34:33',
                'updated_at' => '2022-03-14 15:34:33',
            ),
            109 => 
            array (
                'id' => 605,
                'granny_name' => 'Комлева Татья Анатольевна',
                'address' => 'Мукачевский переулок 4б',
                'granny_phone' => '0973330035',
                'passport_id' => '2045307303',
                'created_at' => '2022-03-14 15:34:33',
                'updated_at' => '2022-03-14 15:34:33',
            ),
            110 => 
            array (
                'id' => 606,
                'granny_name' => 'Николаенко ВераВаисльевна',
                'address' => 'Фонтанская дорога 51а квартира 16',
                'granny_phone' => '0504447930',
                'passport_id' => '1096090831',
                'created_at' => '2022-03-14 15:34:33',
                'updated_at' => '2022-03-14 15:34:33',
            ),
            111 => 
            array (
                'id' => 607,
                'granny_name' => 'Кондыбко Виктория Владимировна',
                'address' => 'Фонтанская дорога 51а квартира 32',
                'granny_phone' => NULL,
                'passport_id' => '251561',
                'created_at' => '2022-03-14 15:34:34',
                'updated_at' => '2022-03-14 15:34:34',
            ),
            112 => 
            array (
                'id' => 608,
                'granny_name' => 'Дуде Наталья Николаевна',
                'address' => 'Успенская 65 кв 55',
                'granny_phone' => '0501708578',
                'passport_id' => '1769110201',
                'created_at' => '2022-03-14 15:34:34',
                'updated_at' => '2022-03-14 15:34:34',
            ),
            113 => 
            array (
                'id' => 609,
                'granny_name' => 'Шевченко Светлана Ивановна',
                'address' => 'Ришельевская 55 кв 17',
                'granny_phone' => '0504906326',
                'passport_id' => '000009',
                'created_at' => '2022-03-14 15:34:34',
                'updated_at' => '2022-03-14 15:34:34',
            ),
            114 => 
            array (
                'id' => 610,
                'granny_name' => 'Каструб НинаВасильевна',
                'address' => 'Ивана Франка 39 кв 82',
                'granny_phone' => '630659',
                'passport_id' => '103683',
                'created_at' => '2022-03-14 15:34:34',
                'updated_at' => '2022-03-14 15:34:34',
            ),
            115 => 
            array (
                'id' => 611,
                'granny_name' => 'Карпов Олег Потрович',
                'address' => 'ФранцузкийБульвар дом 16 кв 172',
                'granny_phone' => '0983665812',
                'passport_id' => '1388816693',
                'created_at' => '2022-03-14 15:34:34',
                'updated_at' => '2022-03-14 15:34:34',
            ),
            116 => 
            array (
                'id' => 612,
                'granny_name' => 'Шафоростоф Евгений Владимирович',
                'address' => 'Приморская 29 квартира 7 ',
                'granny_phone' => NULL,
                'passport_id' => '2752416394',
                'created_at' => '2022-03-14 15:34:35',
                'updated_at' => '2022-03-14 15:34:35',
            ),
            117 => 
            array (
                'id' => 613,
                'granny_name' => 'Лопатин Генадий Тимофеевич',
                'address' => 'Новосельского 32 кв 88',
                'granny_phone' => NULL,
                'passport_id' => '1575702954',
                'created_at' => '2022-03-14 15:34:35',
                'updated_at' => '2022-03-14 15:34:35',
            ),
            118 => 
            array (
                'id' => 614,
                'granny_name' => 'Лопатина Людмила Евгениевна',
                'address' => 'Белинского 6 кв 89',
                'granny_phone' => '0964061894',
                'passport_id' => '1864127086',
                'created_at' => '2022-03-14 15:34:35',
                'updated_at' => '2022-03-14 15:34:35',
            ),
            119 => 
            array (
                'id' => 615,
                'granny_name' => 'Дурягина Татьяна Александровна',
                'address' => 'Шевченко 7 кв 26',
                'granny_phone' => '0958552957',
                'passport_id' => '620480',
                'created_at' => '2022-03-14 15:34:35',
                'updated_at' => '2022-03-14 15:34:35',
            ),
            120 => 
            array (
                'id' => 616,
                'granny_name' => 'Красовская Елена Петровна',
                'address' => 'Лейтенанта Шмидта 17 кв 16',
                'granny_phone' => '0673752899',
                'passport_id' => '654',
                'created_at' => '2022-03-14 15:34:35',
                'updated_at' => '2022-03-14 15:34:35',
            ),
            121 => 
            array (
                'id' => 617,
                'granny_name' => 'Жуковский Вячеслав Иванович',
                'address' => 'прочпект шевченка 7 кв 61',
                'granny_phone' => '0675268522',
                'passport_id' => '1702501876
',
                'created_at' => '2022-03-14 15:34:36',
                'updated_at' => '2022-03-14 15:34:36',
            ),
            122 => 
            array (
                'id' => 618,
                'granny_name' => 'Орджиковская Валентина Петровна',
                'address' => 'Грушевского 4 кв 10',
                'granny_phone' => '0975588422',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:36',
                'updated_at' => '2022-03-14 15:34:36',
            ),
            123 => 
            array (
                'id' => 619,
                'granny_name' => 'Шевченко Раиса ',
                'address' => 'Малая Арнаутская 39 кв 10',
                'granny_phone' => '0975906047',
                'passport_id' => '1315816485',
                'created_at' => '2022-03-14 15:34:36',
                'updated_at' => '2022-03-14 15:34:36',
            ),
            124 => 
            array (
                'id' => 620,
                'granny_name' => 'Процко Ирина Алекеевна',
                'address' => 'переулок Степной 3 кв у.д.',
                'granny_phone' => '0635391195',
                'passport_id' => '2190121928',
                'created_at' => '2022-03-14 15:34:36',
                'updated_at' => '2022-03-14 15:34:36',
            ),
            125 => 
            array (
                'id' => 621,
                'granny_name' => 'Палетина Зоя Ивановна',
                'address' => 'Малая Арнаутская 33 кв 10',
                'granny_phone' => '0505824618',
                'passport_id' => '1406285982',
                'created_at' => '2022-03-14 15:34:36',
                'updated_at' => '2022-03-14 15:34:36',
            ),
            126 => 
            array (
                'id' => 622,
                'granny_name' => 'Мищинский Сергей Павлович',
                'address' => 'Малиновского 69',
                'granny_phone' => '0681785820',
                'passport_id' => '1383516293',
                'created_at' => '2022-03-14 15:34:37',
                'updated_at' => '2022-03-14 15:34:37',
            ),
            127 => 
            array (
                'id' => 623,
                'granny_name' => 'Гайцина Ала Семеновна',
                'address' => 'Юрия Леши 3 кв 8',
                'granny_phone' => '0678371644',
                'passport_id' => '1851401586',
                'created_at' => '2022-03-14 15:34:37',
                'updated_at' => '2022-03-14 15:34:37',
            ),
            128 => 
            array (
                'id' => 624,
                'granny_name' => 'Процко катерина Ваильевна',
                'address' => 'степной переулок 3',
                'granny_phone' => '0635391195',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:37',
                'updated_at' => '2022-03-14 15:34:37',
            ),
            129 => 
            array (
                'id' => 625,
                'granny_name' => 'Рыжих нин михайловна',
                'address' => 'Шевченко 23а кв 20',
                'granny_phone' => '0972289335',
                'passport_id' => '2176821283',
                'created_at' => '2022-03-14 15:34:37',
                'updated_at' => '2022-03-14 15:34:37',
            ),
            130 => 
            array (
                'id' => 626,
                'granny_name' => 'Немова Раиса Борисовна',
                'address' => 'Гагарина 4 кв 21',
                'granny_phone' => '0685361632',
                'passport_id' => '1507814584',
                'created_at' => '2022-03-14 15:34:38',
                'updated_at' => '2022-03-14 15:34:38',
            ),
            131 => 
            array (
                'id' => 627,
                'granny_name' => 'Никитина Ольга Ивановна',
                'address' => 'Академика 20 кв 4 ',
                'granny_phone' => '0976777018',
                'passport_id' => '127528',
                'created_at' => '2022-03-14 15:34:38',
                'updated_at' => '2022-03-14 15:34:38',
            ),
            132 => 
            array (
                'id' => 628,
                'granny_name' => 'Андреева Марина Степановна',
                'address' => 'Пушкинская 42 кв 20',
                'granny_phone' => '0984388421',
                'passport_id' => '115898',
                'created_at' => '2022-03-14 15:34:38',
                'updated_at' => '2022-03-14 15:34:38',
            ),
            133 => 
            array (
                'id' => 629,
                'granny_name' => 'Крыштофор ЮрийВладимирович ',
                'address' => 'Педогогическая 24 кв 30',
                'granny_phone' => '0675562610',
                'passport_id' => '1763210118',
                'created_at' => '2022-03-14 15:34:38',
                'updated_at' => '2022-03-14 15:34:38',
            ),
            134 => 
            array (
                'id' => 630,
                'granny_name' => 'Романюк Любовь Михайловна ',
                'address' => 'Сегецкая 6 кв 96',
                'granny_phone' => '0963657882',
                'passport_id' => '2205409461',
                'created_at' => '2022-03-14 15:34:39',
                'updated_at' => '2022-03-14 15:34:39',
            ),
            135 => 
            array (
                'id' => 631,
                'granny_name' => 'СушкоАЛЕКСАНДР Александрович',
                'address' => 'Коблевская 42 кв 20',
                'granny_phone' => '0678820914',
                'passport_id' => '765779',
                'created_at' => '2022-03-14 15:34:39',
                'updated_at' => '2022-03-14 15:34:39',
            ),
            136 => 
            array (
                'id' => 632,
                'granny_name' => 'Зяблева Лариса Александрова',
                'address' => 'Коблевская 40 кв 7',
                'granny_phone' => '0969512301',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:39',
                'updated_at' => '2022-03-14 15:34:39',
            ),
            137 => 
            array (
                'id' => 633,
                'granny_name' => 'Дроздюк Людмила Павловна',
                'address' => 'Сегецкая 6б кв 35',
                'granny_phone' => '0506933506',
                'passport_id' => '2138408566',
                'created_at' => '2022-03-14 15:34:39',
                'updated_at' => '2022-03-14 15:34:39',
            ),
            138 => 
            array (
                'id' => 634,
                'granny_name' => 'Аржаникова Алла Андреевна',
                'address' => 'проспект Гагарина 4 кв 8',
                'granny_phone' => '0972954773',
                'passport_id' => '1386901285',
                'created_at' => '2022-03-14 15:34:40',
                'updated_at' => '2022-03-14 15:34:40',
            ),
            139 => 
            array (
                'id' => 635,
                'granny_name' => 'Алмиова Марина Сергеевна',
                'address' => 'героев крут 22 кв 59',
                'granny_phone' => '0971406670',
                'passport_id' => '2128324303',
                'created_at' => '2022-03-14 15:34:40',
                'updated_at' => '2022-03-14 15:34:40',
            ),
            140 => 
            array (
                'id' => 636,
                'granny_name' => 'Омельянченко Татьяна Михайловна',
                'address' => 'Сегецкая 21б кв 2',
                'granny_phone' => '0674817982',
                'passport_id' => '1910902125',
                'created_at' => '2022-03-14 15:34:40',
                'updated_at' => '2022-03-14 15:34:40',
            ),
            141 => 
            array (
                'id' => 637,
                'granny_name' => 'Маркелова Виктория Анатолиевна',
                'address' => 'Французкий бульвар 20 кв 50',
                'granny_phone' => '682706',
                'passport_id' => '902587',
                'created_at' => '2022-03-14 15:34:40',
                'updated_at' => '2022-03-14 15:34:40',
            ),
            142 => 
            array (
                'id' => 638,
                'granny_name' => 'Погодина Ольга Михайловна',
                'address' => 'Маккаренко 33',
                'granny_phone' => '0673764719',
                'passport_id' => '2021022348',
                'created_at' => '2022-03-14 15:34:40',
                'updated_at' => '2022-03-14 15:34:40',
            ),
            143 => 
            array (
                'id' => 639,
                'granny_name' => 'Черняк Олег',
                'address' => 'прохоровского 18 кв 28',
                'granny_phone' => '0630570179',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:40',
                'updated_at' => '2022-03-14 15:34:40',
            ),
            144 => 
            array (
                'id' => 640,
                'granny_name' => 'Закровная Светлана Дмитриевна',
                'address' => 'прохоровская 18 квартира 20',
                'granny_phone' => '04870150127',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:41',
                'updated_at' => '2022-03-14 15:34:41',
            ),
            145 => 
            array (
                'id' => 641,
                'granny_name' => 'Васильева Валентина',
                'address' => 'проспект Гагарина 23 кв 18',
                'granny_phone' => '0936498143',
                'passport_id' => '1970013248',
                'created_at' => '2022-03-14 15:34:41',
                'updated_at' => '2022-03-14 15:34:41',
            ),
            146 => 
            array (
                'id' => 642,
                'granny_name' => 'Шаростко Жанна Анатольевна',
                'address' => 'новсельского 67 кв 4',
                'granny_phone' => '0973572798',
                'passport_id' => '2153720661',
                'created_at' => '2022-03-14 15:34:41',
                'updated_at' => '2022-03-14 15:34:41',
            ),
            147 => 
            array (
                'id' => 643,
                'granny_name' => 'Холопова Светлана петрова',
                'address' => 'Карантинный Спуск 1 кв 15',
                'granny_phone' => '0964431572',
                'passport_id' => '292718',
                'created_at' => '2022-03-14 15:34:41',
                'updated_at' => '2022-03-14 15:34:41',
            ),
            148 => 
            array (
                'id' => 644,
                'granny_name' => 'Лебедова Надежда Серкова',
                'address' => 'троицкая 28 кв 10',
                'granny_phone' => '0675573262',
                'passport_id' => 'AIV563492',
                'created_at' => '2022-03-14 15:34:42',
                'updated_at' => '2022-03-14 15:34:42',
            ),
            149 => 
            array (
                'id' => 645,
                'granny_name' => 'Торбатнюк Анатолий Александрович',
                'address' => 'бунина 2 кв 1',
                'granny_phone' => '0674186338',
                'passport_id' => '933952',
                'created_at' => '2022-03-14 15:34:42',
                'updated_at' => '2022-03-14 15:34:42',
            ),
            150 => 
            array (
                'id' => 646,
                'granny_name' => 'Соколова Татьяна Александровна',
                'address' => 'николаевская дорога 34 кв 818',
                'granny_phone' => '0679269212',
                'passport_id' => '1967506247',
                'created_at' => '2022-03-14 15:34:42',
                'updated_at' => '2022-03-14 15:34:42',
            ),
            151 => 
            array (
                'id' => 647,
                'granny_name' => 'Драгон Тамара Алексеевна',
                'address' => 'известняковый переулок 3/4',
                'granny_phone' => '0987577947',
                'passport_id' => '2073801825',
                'created_at' => '2022-03-14 15:34:42',
                'updated_at' => '2022-03-14 15:34:42',
            ),
            152 => 
            array (
                'id' => 648,
                'granny_name' => 'Костенко Петро Иванович',
                'address' => 'большая арнаутская 61 кв 11',
                'granny_phone' => '0975868810',
                'passport_id' => '549498',
                'created_at' => '2022-03-14 15:34:42',
                'updated_at' => '2022-03-14 15:34:42',
            ),
            153 => 
            array (
                'id' => 649,
                'granny_name' => 'Астяннова Лидия Алексеевна',
                'address' => 'Базарная 77 кв 55',
                'granny_phone' => '0677972749',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:43',
                'updated_at' => '2022-03-14 15:34:43',
            ),
            154 => 
            array (
                'id' => 650,
                'granny_name' => 'Чауш Леонид Федорович',
                'address' => 'успенского 27 кв 1',
                'granny_phone' => '0984427889',
                'passport_id' => '1548706734',
                'created_at' => '2022-03-14 15:34:43',
                'updated_at' => '2022-03-14 15:34:43',
            ),
            155 => 
            array (
                'id' => 651,
                'granny_name' => 'Паещук Зиноида Кириловна',
                'address' => NULL,
                'granny_phone' => '87220004',
                'passport_id' => '1283302225',
                'created_at' => '2022-03-14 15:34:43',
                'updated_at' => '2022-03-14 15:34:43',
            ),
            156 => 
            array (
                'id' => 652,
                'granny_name' => 'Ситинова Ольга Иванова',
                'address' => 'Терешкова 30 кв 7',
                'granny_phone' => '0949320255',
                'passport_id' => '128014',
                'created_at' => '2022-03-14 15:34:43',
                'updated_at' => '2022-03-14 15:34:43',
            ),
            157 => 
            array (
                'id' => 653,
                'granny_name' => 'Гайдаржи Валентина Федоровна',
                'address' => 'Держинского 6а кв 16',
                'granny_phone' => '0962496366',
                'passport_id' => '198412122',
                'created_at' => '2022-03-14 15:34:44',
                'updated_at' => '2022-03-14 15:34:44',
            ),
            158 => 
            array (
                'id' => 654,
                'granny_name' => 'Ряжкина Ольга Владимировна',
                'address' => 'преображенская 11 кв 34',
                'granny_phone' => '0505300704',
                'passport_id' => '232674',
                'created_at' => '2022-03-14 15:34:44',
                'updated_at' => '2022-03-14 15:34:44',
            ),
            159 => 
            array (
                'id' => 655,
                'granny_name' => 'Лукошева Людмила Ивановна',
                'address' => 'Морозина 1а кв 39',
                'granny_phone' => '0679699770',
                'passport_id' => '1586209585',
                'created_at' => '2022-03-14 15:34:44',
                'updated_at' => '2022-03-14 15:34:44',
            ),
            160 => 
            array (
                'id' => 656,
                'granny_name' => 'Федорова ЛидияМвановна',
                'address' => 'переулок подопроводный 9 кв 18',
                'granny_phone' => '0985880532',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:44',
                'updated_at' => '2022-03-14 15:34:44',
            ),
            161 => 
            array (
                'id' => 657,
                'granny_name' => 'Крайняк Лера Николаевна',
                'address' => 'проспект Шевченка 8/7 кв 43',
                'granny_phone' => '115580',
                'passport_id' => NULL,
                'created_at' => '2022-03-14 15:34:44',
                'updated_at' => '2022-03-14 15:34:44',
            ),
            162 => 
            array (
                'id' => 658,
                'granny_name' => 'Горелова Ефросия Васильевна',
                'address' => 'Базарна 21 кв 6',
                'granny_phone' => NULL,
                'passport_id' => '7244988',
                'created_at' => '2022-03-14 15:34:45',
                'updated_at' => '2022-03-14 15:34:45',
            ),
            163 => 
            array (
                'id' => 659,
                'granny_name' => 'Колестников Тамара Алексеевна',
                'address' => 'проспект шевченка 6/1 кв 6',
                'granny_phone' => '0984967605',
                'passport_id' => '1377826525',
                'created_at' => '2022-03-14 15:34:45',
                'updated_at' => '2022-03-14 15:34:45',
            ),
        ));

        
    }
}