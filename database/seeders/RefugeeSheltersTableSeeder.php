<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RefugeeSheltersTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('refugee_shelters')->delete();
        
        \DB::table('refugee_shelters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ольга',
                'phone' => '49160849871',
                'address' => '_',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
            'vacant_places' => '2 комнаты (площадь 60 кв метров)',
                'conditions' => 'есть мебель - станадртная квартира',
                'comment' => 'Предпочтение под семью',
                'created_at' => NULL,
                'updated_at' => '2022-04-09 09:06:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Максим',
                'phone' => '0987870841',
                'address' => 'район таирово',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
            'vacant_places' => '2 комнаты (плошадь 48 кв метров)',
                'conditions' => '',
                'comment' => 'Предпочтение под маму с детьми',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Юрий',
                'phone' => '0979715795',
                'address' => 'район Черноморки',
                'terms' => 'Безвозмездно но период до 15.05.2022 ',
            'vacant_places' => '2 домика (площать каждого по 80 кв метров). Пригодно для 4 взрослых + 4 детей',
                'conditions' => 'есть мебель',
                'comment' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Анна',
                'phone' => '0958898697',
                'address' => 'район Ольгиевской',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'vacant_places' => '2 комнаты. Пригодно для 2-3 взрослых ',
                'conditions' => '',
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Дмитрий',
                'phone' => '0504945559',
                'address' => 'район Жуковского',
                'terms' => 'Безвозмездно, период до 15.05.2022',
            'vacant_places' => '2 офиса (каждый площадью по 60 метров)
Пригодно для 6-10 взрослых',
                'conditions' => '',
                'comment' => 'временное проживание',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
            'name' => 'Владимир (наш)',
                'phone' => '073 948 45 50',
            'address' => 'на совиньоне. 14(?) мест. ',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'vacant_places' => 'свободная квартира 4 места',
                'conditions' => 'нет кухни, если организовать туда какой то холодильник, пару столов и стульев, то не проблема',
                'comment' => 'Предпочтение под многодетных',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
            'name' => 'Игорь (священник)',
                'phone' => '0675594042',
                'address' => 'церковь Благодять. Леси Украинки 42',
                'terms' => 'Безвозмездно на пару дней',
                'vacant_places' => 'надо уточнять',
                'conditions' => 'надо уточнять',
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-04-09 10:04:42',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Игорь',
                'phone' => '0671650989',
                'address' => 'Большая Балка',
                'terms' => NULL,
                'vacant_places' => '1-2 детей',
                'conditions' => 'приют',
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Алена',
                'phone' => '674944138',
                'address' => 'Большая Балка',
                'terms' => NULL,
                'vacant_places' => '1-2 детей',
                'conditions' => 'приют',
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'name' => '_',
                'phone' => '0967687410, 0995687157',
                'address' => 'Молдованка',
                'terms' => NULL,
                'vacant_places' => 'Квартира для 2 чел',
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
            'name' => 'Виталик (наш)',
                'phone' => '0675181851',
                'address' => 'Люсторвская дорога 178/1.',
                'terms' => NULL,
                'vacant_places' => 'Пригодно для 5 детей',
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 19,
                'name' => 'Юрий',
                'phone' => '0931447504',
                'address' => 'Нерубайское',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'vacant_places' => 'приют 1-2 взрослых человек',
                'conditions' => '',
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 20,
                'name' => 'Инна',
                'phone' => '0669328331',
                'address' => 'Софиевская 10',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'vacant_places' => '21 место',
                'conditions' => 'Жилье и питание для женщин и детей ',
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 21,
                'name' => 'лара',
                'phone' => '0976484121',
                'address' => '10 апреля ',
                'terms' => NULL,
                'vacant_places' => 'Пригодно до 10 детей',
                'conditions' => '',
                'comment' => 'пункт беженцев',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 22,
                'name' => 'Ксюша Кирха',
                'phone' => '0960284324',
                'address' => '',
                'terms' => 'Безвозмездно на 2-3 дня',
                'vacant_places' => 'Пригодно для 30 человек',
                'conditions' => '',
                'comment' => 'гостиница',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 23,
                'name' => 'Лариса Петровна',
                'phone' => '677494642',
                'address' => '',
                'terms' => NULL,
                'vacant_places' => '30 мест',
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 24,
                'name' => 'Владимир',
                'phone' => '0503920287',
                'address' => ' ',
                'terms' => NULL,
                'vacant_places' => NULL,
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 25,
                'name' => 'Евгений',
                'phone' => '0631459190',
                'address' => ' ',
                'terms' => NULL,
                'vacant_places' => NULL,
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 26,
                'name' => 'Ольга',
                'phone' => '504900440',
                'address' => 'просили позвонить, чтобы согласовать как мы принимаем беженцев',
                'terms' => NULL,
                'vacant_places' => '20-25 человек',
                'conditions' => NULL,
                'comment' => 'просили позвонить, чтобы согласовать как мы принимаем беженцев',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 27,
                'name' => 'группа по размещению людей.',
                'phone' => 'https://t.me/OdeSSa_Mama_priutit',
                'address' => ' ',
                'terms' => NULL,
                'vacant_places' => NULL,
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 28,
                'name' => 'artclub',
                'phone' => 'telegram: @Artclub11111',
                'address' => '50 км от Одессы Бурдовка.',
                'terms' => NULL,
                'vacant_places' => NULL,
                'conditions' => NULL,
                'comment' => 'У нас есть дача за городом двухэтажная',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 29,
                'name' => 'Николай',
                'phone' => '0676848596',
                'address' => 'Житкова 76.',
                'terms' => 'аренда за 3 тысячи гривен в месяц',
                'vacant_places' => 'Два однокомнатных домика. Пригодно для двух семей.',
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 30,
                'name' => 'хостел',
                'phone' => '0675798577',
                'address' => '_',
                'terms' => 'бесвозмездно на 1-2 дня',
                'vacant_places' => NULL,
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => '2022-04-09 09:55:37',
                'updated_at' => '2022-04-09 09:59:59',
            ),
            23 => 
            array (
                'id' => 31,
                'name' => '2-ая Застава',
                'phone' => '0677060532',
                'address' => '2-ая Застава',
                'terms' => '20 грн приезд,10 грн стирка',
                'vacant_places' => '10 мест',
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => '2022-04-09 09:59:39',
                'updated_at' => '2022-04-09 10:00:10',
            ),
            24 => 
            array (
                'id' => 32,
                'name' => '_',
                'phone' => '0677060532',
                'address' => 'Слободка',
                'terms' => 'бесплатно на 2-3 дня',
                'vacant_places' => 'семья 2-3 человека/ женщина с ребенком',
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => '2022-04-09 10:02:26',
                'updated_at' => '2022-04-09 10:02:26',
            ),
            25 => 
            array (
                'id' => 33,
                'name' => 'Руденко',
                'phone' => 'inst: @MSRUDENKO_N',
                'address' => '-',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'vacant_places' => '2 комнатная квартира',
                'conditions' => NULL,
                'comment' => NULL,
                'created_at' => '2022-04-10 11:26:44',
                'updated_at' => '2022-04-10 11:26:44',
            ),
        ));

        
    }
}