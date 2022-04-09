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
                'adddress' => 'район жд',
                'comment' => 'Предпочтение под семью',
                'conditions' => '',
                'created_at' => NULL,
                'id' => 1,
                'name' => 'Ольга',
                'phone' => '491608498718',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'updated_at' => NULL,
            'vacant_places' => '2 комнаты (площадь 60 кв метров). есть мебель - станадртная квартира',
            ),
            1 => 
            array (
                'adddress' => 'район таирово',
                'comment' => 'Предпочтение под маму с детьми',
                'conditions' => '',
                'created_at' => NULL,
                'id' => 2,
                'name' => 'Максим',
                'phone' => '0987870841',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'updated_at' => NULL,
            'vacant_places' => '2 комнаты (плошадь 48 кв метров)',
            ),
            2 => 
            array (
                'adddress' => 'район Черноморки',
                'comment' => '',
                'conditions' => 'есть мебель',
                'created_at' => NULL,
                'id' => 3,
                'name' => 'Юрий',
                'phone' => '0979715795',
                'terms' => 'Безвозмездно но период до 15.05.2022 ',
                'updated_at' => NULL,
            'vacant_places' => '2 домика (площать каждого по 80 кв метров). Пригодно для 4 взрослых + 4 детей',
            ),
            3 => 
            array (
                'adddress' => 'район Ольгиевской',
                'comment' => NULL,
                'conditions' => '',
                'created_at' => NULL,
                'id' => 4,
                'name' => 'Анна',
                'phone' => '0958898697',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'updated_at' => NULL,
                'vacant_places' => '2 комнаты. Пригодно для 2-3 взрослых ',
            ),
            4 => 
            array (
                'adddress' => 'район Жуковского',
                'comment' => 'временное проживание',
                'conditions' => '',
                'created_at' => NULL,
                'id' => 5,
                'name' => 'Дмитрий',
                'phone' => '0504945559',
                'terms' => 'Безвозмездно, период до 15.05.2022',
                'updated_at' => NULL,
            'vacant_places' => '2 офиса (каждый площадью по 60 метров)
Пригодно для 6-10 взрослых',
            ),
            5 => 
            array (
            'adddress' => 'на совиньоне. 14(?) мест. ',
                'comment' => 'Предпочтение под многодетных',
                'conditions' => 'нет кухни, если организовать туда какой то холодильник, пару столов и стульев, то не проблема',
                'created_at' => NULL,
                'id' => 6,
            'name' => 'Владимир (наш)',
                'phone' => '073 948 45 50',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'updated_at' => NULL,
                'vacant_places' => 'свободная квартира 4 места',
            ),
            6 => 
            array (
                'adddress' => 'надо уточнять',
                'comment' => NULL,
                'conditions' => 'надо уточнять',
                'created_at' => NULL,
                'id' => 7,
            'name' => 'Игорь (священник)',
                'phone' => '0675594042',
                'terms' => 'Безвозмездно на пару дней',
                'updated_at' => NULL,
                'vacant_places' => 'надо уточнять',
            ),
            7 => 
            array (
                'adddress' => 'Большая Балка',
                'comment' => NULL,
                'conditions' => 'приют',
                'created_at' => NULL,
                'id' => 8,
                'name' => 'Игорь',
                'phone' => '0671650989',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => '1-2 детей',
            ),
            8 => 
            array (
                'adddress' => 'Большая Балка',
                'comment' => NULL,
                'conditions' => 'приют',
                'created_at' => NULL,
                'id' => 11,
                'name' => 'Алена',
                'phone' => '674944138',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => '1-2 детей',
            ),
            9 => 
            array (
                'adddress' => 'Молдованка',
                'comment' => NULL,
                'conditions' => NULL,
                'created_at' => NULL,
                'id' => 12,
                'name' => '_',
                'phone' => '0967687410, 0995687157',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => 'Квартира для 2 чел',
            ),
            10 => 
            array (
                'adddress' => 'Люсторвская дорога 178/1.',
                'comment' => NULL,
                'conditions' => NULL,
                'created_at' => NULL,
                'id' => 13,
            'name' => 'Виталик (наш)',
                'phone' => '0675181851',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => 'Пригодно для 5 детей',
            ),
            11 => 
            array (
                'adddress' => 'Нерубайское',
                'comment' => NULL,
                'conditions' => '',
                'created_at' => NULL,
                'id' => 19,
                'name' => 'Юрий',
                'phone' => '0931447504',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'updated_at' => NULL,
                'vacant_places' => 'приют 1-2 взрослых человек',
            ),
            12 => 
            array (
                'adddress' => 'Софиевская 10',
                'comment' => NULL,
                'conditions' => 'Жилье и питание для женщин и детей ',
                'created_at' => NULL,
                'id' => 20,
                'name' => 'Инна',
                'phone' => '0669328331',
            'terms' => 'Безвозмездно (возможно только по расходам на ком услуги) но период проверять',
                'updated_at' => NULL,
                'vacant_places' => '21 место',
            ),
            13 => 
            array (
                'adddress' => '10 апреля ',
                'comment' => 'пункт беженцев',
                'conditions' => '',
                'created_at' => NULL,
                'id' => 21,
                'name' => 'лара',
                'phone' => '0976484121',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => 'Пригодно до 10 детей',
            ),
            14 => 
            array (
                'adddress' => '',
                'comment' => 'гостиница',
                'conditions' => '',
                'created_at' => NULL,
                'id' => 22,
                'name' => 'Ксюша Кирха',
                'phone' => '0960284324',
                'terms' => 'Безвозмездно на 2-3 дня',
                'updated_at' => NULL,
                'vacant_places' => 'Пригодно для 30 человек',
            ),
            15 => 
            array (
                'adddress' => '',
                'comment' => NULL,
                'conditions' => NULL,
                'created_at' => NULL,
                'id' => 23,
                'name' => 'Лариса Петровна',
                'phone' => '677494642',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => '30 мест',
            ),
            16 => 
            array (
                'adddress' => ' ',
                'comment' => NULL,
                'conditions' => NULL,
                'created_at' => NULL,
                'id' => 24,
                'name' => 'Владимир',
                'phone' => '0503920287',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => NULL,
            ),
            17 => 
            array (
                'adddress' => ' ',
                'comment' => NULL,
                'conditions' => NULL,
                'created_at' => NULL,
                'id' => 25,
                'name' => 'Евгений',
                'phone' => '0631459190',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => NULL,
            ),
            18 => 
            array (
                'adddress' => 'просили позвонить, чтобы согласовать как мы принимаем беженцев',
                'comment' => 'просили позвонить, чтобы согласовать как мы принимаем беженцев',
                'conditions' => NULL,
                'created_at' => NULL,
                'id' => 26,
                'name' => 'Ольга',
                'phone' => '504900440',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => '20-25 человек',
            ),
            19 => 
            array (
                'adddress' => ' ',
                'comment' => NULL,
                'conditions' => NULL,
                'created_at' => NULL,
                'id' => 27,
                'name' => 'группа по размещению людей.',
                'phone' => 'https://t.me/OdeSSa_Mama_priutit',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => NULL,
            ),
            20 => 
            array (
                'adddress' => '50 км от Одессы Бурдовка.',
                'comment' => 'У нас есть дача за городом двухэтажная',
                'conditions' => NULL,
                'created_at' => NULL,
                'id' => 28,
                'name' => 'artclub',
                'phone' => 'telegram: @Artclub11111',
                'terms' => NULL,
                'updated_at' => NULL,
                'vacant_places' => NULL,
            ),
            21 => 
            array (
                'adddress' => 'Житкова 76.',
                'comment' => NULL,
                'conditions' => NULL,
                'created_at' => NULL,
                'id' => 29,
                'name' => 'Николай',
                'phone' => '0676848596',
                'terms' => 'аренда за 3 тысячи гривен в месяц',
                'updated_at' => NULL,
                'vacant_places' => 'Два однокомнатных домика. Пригодно для двух семей.',
            ),
        ));

        
    }
}