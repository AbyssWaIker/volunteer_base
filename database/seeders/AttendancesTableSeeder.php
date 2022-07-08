<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendances')->delete();
        
        \DB::table('attendances')->insert(array (
            0 => 
            array (
                'id' => 13,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-04',
                'status' => 0,
                'created_at' => '2022-07-04 11:17:48',
                'updated_at' => '2022-07-04 11:17:48',
            ),
            1 => 
            array (
                'id' => 1,
                'volunteer_id' => 238,
                'attendance_day' => '2022-06-27',
                'status' => 1,
                'created_at' => '2022-07-04 11:16:54',
                'updated_at' => '2022-07-04 11:26:17',
            ),
            2 => 
            array (
                'id' => 2,
                'volunteer_id' => 238,
                'attendance_day' => '2022-06-28',
                'status' => 1,
                'created_at' => '2022-07-04 11:16:54',
                'updated_at' => '2022-07-04 11:26:17',
            ),
            3 => 
            array (
                'id' => 3,
                'volunteer_id' => 238,
                'attendance_day' => '2022-06-29',
                'status' => 1,
                'created_at' => '2022-07-04 11:16:54',
                'updated_at' => '2022-07-04 11:26:17',
            ),
            4 => 
            array (
                'id' => 7,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-04',
                'status' => 1,
                'created_at' => '2022-07-04 11:17:48',
                'updated_at' => '2022-07-04 11:26:17',
            ),
            5 => 
            array (
                'id' => 6,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-04',
                'status' => 1,
                'created_at' => '2022-07-04 11:17:48',
                'updated_at' => '2022-07-04 11:26:17',
            ),
            6 => 
            array (
                'id' => 8,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-04',
                'status' => 1,
                'created_at' => '2022-07-04 11:17:48',
                'updated_at' => '2022-07-04 11:26:22',
            ),
            7 => 
            array (
                'id' => 9,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-04',
                'status' => 1,
                'created_at' => '2022-07-04 11:17:48',
                'updated_at' => '2022-07-04 11:26:22',
            ),
            8 => 
            array (
                'id' => 10,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-04',
                'status' => 1,
                'created_at' => '2022-07-04 11:17:48',
                'updated_at' => '2022-07-04 11:26:22',
            ),
            9 => 
            array (
                'id' => 11,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-04',
                'status' => 1,
                'created_at' => '2022-07-04 11:17:48',
                'updated_at' => '2022-07-04 11:26:22',
            ),
            10 => 
            array (
                'id' => 12,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-04',
                'status' => 1,
                'created_at' => '2022-07-04 11:17:48',
                'updated_at' => '2022-07-04 11:26:22',
            ),
            11 => 
            array (
                'id' => 15,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-05',
                'status' => 0,
                'created_at' => '2022-07-05 10:05:02',
                'updated_at' => '2022-07-05 10:05:02',
            ),
            12 => 
            array (
                'id' => 16,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-05',
                'status' => 0,
                'created_at' => '2022-07-05 10:05:05',
                'updated_at' => '2022-07-05 10:05:05',
            ),
            13 => 
            array (
                'id' => 17,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-05',
                'status' => 0,
                'created_at' => '2022-07-05 10:05:10',
                'updated_at' => '2022-07-05 10:05:10',
            ),
            14 => 
            array (
                'id' => 18,
                'volunteer_id' => 238,
                'attendance_day' => '2022-07-05',
                'status' => 0,
                'created_at' => '2022-07-05 10:05:15',
                'updated_at' => '2022-07-05 10:05:15',
            ),
        ));

        
    }
}