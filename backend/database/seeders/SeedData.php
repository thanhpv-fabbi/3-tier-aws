<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'thanhpv',
                'type' => 1,
                'email' => 'thanhpv@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'hoibq',
                'type' => 1,
                'email' => 'hoibq@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'ducnh',
                'type' => 0,
                'email' => 'ducnh@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'kientmc',
                'type' => 0,
                'email' => 'kientmc@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'hungnh',
                'type' => 0,
                'email' => 'hungnh@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'tuanvd',
                'type' => 0,
                'email' => 'tuanvd@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'huydn',
                'type' => 0,
                'email' => 'huydn@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'hieupt',
                'type' => 0,
                'email' => 'hieupt@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'minhnk',
                'type' => 0,
                'email' => 'minhnk@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'truongnd',
                'type' => 0,
                'email' => 'truongnd@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'thanhbv',
                'type' => 0,
                'email' => 'thanhbv@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'tannd',
                'type' => 0,
                'email' => 'tannd@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'tuannq',
                'type' => 0,
                'email' => 'tuannq@fabbi.com.vn',
                'password' => bcrypt('123456')
            ],
        ]);

        DB::table('classRooms')->insert([
            [
                'teacher_id' => 1,
                'class_name' => 'Lớp AWS Cơ bản'
            ],
            [
                'teacher_id' => 1,
                'class_name' => 'Lớp AWS Nâng cao'
            ],
            [
                'teacher_id' => 2,
                'class_name' => 'Lớp tâm sinh lý cơ bản'
            ],
            [
                'teacher_id' => 2,
                'class_name' => 'Lớp lập trình cơ bản'
            ],
            [
                'teacher_id' => 2,
                'class_name' => 'Lớp uống rượu cơ bản'
            ],
        ]);

        DB::table('courses')->insert([
            [
                'name' => 'Lý thuyết cơ bản AWS',
                'status' => 0,
                'description' => 'Là lớp lý thuyết cơ bản thôi',
                'start_time' => '07:00',
                'end_time' => '11:00',
                'class_room_id' => 1
            ],
            [
                'name' => 'Lý thuyết cơ bản AWS Tiết 2',
                'status' => 0,
                'description' => 'Là lớp lý thuyết cơ bản thôi nhưng mà tiết 2',
                'start_time' => '13:00',
                'end_time' => '18:00',
                'class_room_id' => 1
            ],
        ]);
    }
}
