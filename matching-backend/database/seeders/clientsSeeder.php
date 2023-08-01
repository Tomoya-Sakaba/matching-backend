<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert
        ([
            [
                'name' => '山田株式会社',
                'phone_number' => '0300000001',
                'client_url' => 'https://prog.quest-academia.com/',
                'code' => 1008666,
                'prefecture_id' => 13,
                'city' => '江東区',
                'address' => '越中島2丁目1-30',
                'building' => '山田マンション803号',
                'created_at' => now(),
            ],
            [
                'name' => '大阪市役所',
                'phone_number' => '0300000002',
                'client_url' => null,
                'code' => 5300001,
                'prefecture_id' => 27,
                'city' => '大阪市',
                'address' => '北区梅田1丁目12',
                'building' => null,
                'created_at' => now(),
            ],
            [
                'name' => 'クエストアカデミア',
                'phone_number' => '04500000003',
                'client_url' => 'https://prog.quest-academia.com/',
                'code' => 2200012,
                'prefecture_id' => 14,
                'city' => '横浜市',
                'address' => '西区みなとみらい3丁目5',
                'building' => '鈴木マンション107号',
                'created_at' => now(),
            ],
        ]);
    }
}
