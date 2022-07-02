<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminOperationLogTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_operation_log')->delete();
        
        \DB::table('admin_operation_log')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'path' => 'admin',
                'method' => 'GET',
                'ip' => '176.97.63.233',
                'input' => '[]',
                'created_at' => '2022-07-01 21:08:22',
                'updated_at' => '2022-07-01 21:08:22',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'path' => 'admin/grannies',
                'method' => 'GET',
                'ip' => '176.97.63.233',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2022-07-01 21:08:23',
                'updated_at' => '2022-07-01 21:08:23',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'path' => 'admin/stocks',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '[]',
                'created_at' => '2022-07-02 20:23:59',
                'updated_at' => '2022-07-02 20:23:59',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'path' => 'admin/stocks/13/edit',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2022-07-02 20:24:07',
                'updated_at' => '2022-07-02 20:24:07',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'path' => 'admin/stocks/13',
                'method' => 'PUT',
                'ip' => '176.97.63.206',
            'input' => '{"name":"First response WASH and dignity kit (\\u0434\\u043b\\u044f \\u0441\\u0435\\u043c\\u0435\\u0439 \\u0441 \\u0434\\u0435\\u0442\\u044c\\u043c\\u0438)","enabled":"off","_token":"TT1TAjdNEDTcO02c2o6hqKeAbEmxaP2wi56J96lB","_method":"PUT","_previous_":"http:\\/\\/odessa-as-is-base.od.ua\\/admin\\/stocks"}',
                'created_at' => '2022-07-02 20:24:09',
                'updated_at' => '2022-07-02 20:24:09',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'path' => 'admin/stocks',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '[]',
                'created_at' => '2022-07-02 20:24:09',
                'updated_at' => '2022-07-02 20:24:09',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'path' => 'admin/stocks/14/edit',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2022-07-02 20:24:13',
                'updated_at' => '2022-07-02 20:24:13',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'path' => 'admin/stocks/14',
                'method' => 'PUT',
                'ip' => '176.97.63.206',
            'input' => '{"name":"First aid kit A (\\u0434\\u043b\\u044f \\u0441\\u0435\\u043c\\u0435\\u0439 \\u0441 \\u0434\\u0435\\u0442\\u044c\\u043c\\u0438)","enabled":"off","_token":"TT1TAjdNEDTcO02c2o6hqKeAbEmxaP2wi56J96lB","_method":"PUT","_previous_":"http:\\/\\/odessa-as-is-base.od.ua\\/admin\\/stocks"}',
                'created_at' => '2022-07-02 20:24:15',
                'updated_at' => '2022-07-02 20:24:15',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'path' => 'admin/stocks',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '[]',
                'created_at' => '2022-07-02 20:24:15',
                'updated_at' => '2022-07-02 20:24:15',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'path' => 'admin/stocks/12/edit',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2022-07-02 20:24:25',
                'updated_at' => '2022-07-02 20:24:25',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'path' => 'admin/stocks/12',
                'method' => 'PUT',
                'ip' => '176.97.63.206',
                'input' => '{"name":"\\u043f\\u043e\\u0441\\u0442\\u0456\\u043b\\u044c\\u043d\\u0430 \\u0431\\u0456\\u043b\\u0438\\u0437\\u043d\\u0430","enabled":"off","_token":"TT1TAjdNEDTcO02c2o6hqKeAbEmxaP2wi56J96lB","_method":"PUT","_previous_":"http:\\/\\/odessa-as-is-base.od.ua\\/admin\\/stocks"}',
                'created_at' => '2022-07-02 20:24:27',
                'updated_at' => '2022-07-02 20:24:27',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'path' => 'admin/stocks',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '[]',
                'created_at' => '2022-07-02 20:24:28',
                'updated_at' => '2022-07-02 20:24:28',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'path' => 'admin/stocks/9/edit',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2022-07-02 20:24:30',
                'updated_at' => '2022-07-02 20:24:30',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'path' => 'admin/stocks/9',
                'method' => 'PUT',
                'ip' => '176.97.63.206',
                'input' => '{"name":"\\u041a\\u043d\\u0438\\u0433\\u0438","enabled":"off","_token":"TT1TAjdNEDTcO02c2o6hqKeAbEmxaP2wi56J96lB","_method":"PUT","_previous_":"http:\\/\\/odessa-as-is-base.od.ua\\/admin\\/stocks"}',
                'created_at' => '2022-07-02 20:24:32',
                'updated_at' => '2022-07-02 20:24:32',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'path' => 'admin/stocks',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '[]',
                'created_at' => '2022-07-02 20:24:32',
                'updated_at' => '2022-07-02 20:24:32',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'path' => 'admin/volunteers',
                'method' => 'GET',
                'ip' => '176.97.63.206',
                'input' => '{"_pjax":"#pjax-container"}',
                'created_at' => '2022-07-02 20:24:47',
                'updated_at' => '2022-07-02 20:24:47',
            ),
        ));

        
    }
}