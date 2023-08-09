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
        DB::table('counselors')->insert([
            [
                'name' => '山田太郎',
                'name_kana' => 'ヤマダタロウ',
                'register_code' => '00000000',
                'email_address' => null,
                'password' => null,
                'phone_number' => '09000000001',
                'gender' => '男性',
                'birthday' => '2000-07-17',
                'profession_id' => 1,
                'code' => 1008666,
                'prefecture' => '東京都',
                'city' => '江東区',
                'address' => '越中島2丁目1-30',
                'building' => '山田マンション803号',
                'movie_url' => 'https://www.youtube.com/watch?v=lLQQwW0SySo&list=PL1JwPGjp6gpc6zXQ0uvj6VnNwREuEbfot&index=1',
                'created_at' => now(),
            ],
            [
                'name' => '佐藤花子',
                'name_kana' => 'サトウハナコ',
                'register_code' => '00000002',
                'email_address' => null,
                'password' => null,
                'phone_number' => '09000000002',
                'gender' => '女性',
                'birthday' => '1999-05-25',
                'profession_id' => 2,
                'code' => 5300001,
                'prefecture' => '大阪府',
                'city' => '大阪市',
                'address' => '北区梅田1丁目12-30',
                'building' => null,
                'movie_url' => null,
                'created_at' => now(),
            ],
            [
                'name' => '鈴木豊',
                'name_kana' => 'スズキユタカ',
                'register_code' => '00000003',
                'email_address' => null,
                'password' => null,
                'phone_number' => '09000000003',
                'gender' => '男性',
                'birthday' => '1995-12-07',
                'profession_id' => 1,
                'code' => 1008666,
                'prefecture' => '神奈川県',
                'city' => '横浜市',
                'address' => '西区みなとみらい3丁目5',
                'building' => '鈴木マンション107号',
                'movie_url' => 'https://www.youtube.com/watch?v=lLQQwW0SySo&list=PL1JwPGjp6gpc6zXQ0uvj6VnNwREuEbfot&index=1',
                'created_at' => now(),
            ],
        ]);
    }
}
