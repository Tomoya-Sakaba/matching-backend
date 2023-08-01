<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class counselorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counselors')->insert
        ([
            [
                'name' => '山田太郎',
                'register_code' => '00000000',
                'email_address' => 'yamada@sample.com',
                'password' => bcrypt('yamadatarou'),
                'phone_number' => '09000000001',
                'gender' => '男性',
                'birthday' => '2000-07-17',
                'profession_id' => 1,
                'code' => 1008666,
                'prefecture_id' => 13,
                'city' => '江東区',
                'address' => '越中島2丁目1-30',
                'building' => '山田マンション803号',
                'movie_url' => 'https://www.youtube.com/watch?v=lLQQwW0SySo&list=PL1JwPGjp6gpc6zXQ0uvj6VnNwREuEbfot&index=1',
                'created_at' => now(),
            ],
            [
                'name' => '佐藤花子',
                'register_code' => '00000002',
                'emil_address' => 'satou@sample.com',
                'password' => bcrypt('satouhanako'),
                'phone_number' => '09000000002',
                'gender' => '女性',
                'birthday' => '1999-05-25',
                'profession_id' => 2,
                'code' => 5300001,
                'prefecture_id' => 27,
                'city' => '大阪市',
                'address' => '北区梅田1丁目12-30',
                'building' => null,
                'movie_url' => null,
                'created_at' => now(),
            ],
            [
                'name' => '鈴木豊',
                'register_code' => '00000003',
                'emil_address' => 'suzuki@sample.com',
                'password' => bcrypt('suzukiyutaka'),
                'phone_number' => '09000000003',
                'gender' => '男性',
                'birthday' => '1995-12-07',
                'profession_id' => 1,
                'code' => 1008666,
                'prefecture_id' => 14,
                'city' => '横浜市',
                'address' => '西区みなとみらい3丁目5',
                'building' => '鈴木マンション107号',
                'movie_url' => 'https://www.youtube.com/watch?v=lLQQwW0SySo&list=PL1JwPGjp6gpc6zXQ0uvj6VnNwREuEbfot&index=1',
                'created_at' => now(),
            ],
        ]);
    }
}
