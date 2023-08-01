<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prefecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert
        ([
            ['name' => '北海道', 'regions_id' => 1],

            // 東北地方
            ['name' => '青森県', 'regions_id' => 2],
            ['name' => '岩手県', 'regions_id' => 2],
            ['name' => '宮城県', 'regions_id' => 2],
            ['name' => '秋田県', 'regions_id' => 2],
            ['name' => '山形県', 'regions_id' => 2],
            ['name' => '福島県', 'regions_id' => 2],

            // 関東地方
            ['name' => '茨城県', 'regions_id' => 3],
            ['name' => '栃木県', 'regions_id' => 3],
            ['name' => '群馬県', 'regions_id' => 3],
            ['name' => '埼玉県', 'regions_id' => 3],
            ['name' => '千葉県', 'regions_id' => 3],
            ['name' => '東京都', 'regions_id' => 3],
            ['name' => '神奈川県', 'regions_id' => 3],

            // 中部地方
            ['name' => '新潟県', 'regions_id' => 4],
            ['name' => '富山県', 'regions_id' => 4],
            ['name' => '石川県', 'regions_id' => 4],
            ['name' => '福井県', 'regions_id' => 4],
            ['name' => '山梨県', 'regions_id' => 4],
            ['name' => '長野県', 'regions_id' => 4],
            ['name' => '岐阜県', 'regions_id' => 4],
            ['name' => '静岡県', 'regions_id' => 4],
            ['name' => '愛知県', 'regions_id' => 4],

            // 近畿地方
            ['name' => '三重県', 'regions_id' => 5],
            ['name' => '滋賀県', 'regions_id' => 5],
            ['name' => '京都府', 'regions_id' => 5],
            ['name' => '大阪府', 'regions_id' => 5],
            ['name' => '兵庫県', 'regions_id' => 5],
            ['name' => '奈良県', 'regions_id' => 5],
            ['name' => '和歌山県', 'regions_id' => 5],

            // 中国地方
            ['name' => '鳥取県', 'regions_id' => 6],
            ['name' => '島根県', 'regions_id' => 6],
            ['name' => '岡山県', 'regions_id' => 6],
            ['name' => '広島県', 'regions_id' => 6],
            ['name' => '山口県', 'regions_id' => 6],

            // 四国地方
            ['name' => '徳島県', 'regions_id' => 7],
            ['name' => '香川県', 'regions_id' => 7],
            ['name' => '愛媛県', 'regions_id' => 7],
            ['name' => '高知県', 'regions_id' => 7],

            // 九州地方
            ['name' => '福岡県', 'regions_id' => 8],
            ['name' => '佐賀県', 'regions_id' => 8],
            ['name' => '長崎県', 'regions_id' => 8],
            ['name' => '熊本県', 'regions_id' => 8],
            ['name' => '大分県', 'regions_id' => 8],
            ['name' => '宮崎県', 'regions_id' => 8],
            ['name' => '鹿児島県', 'regions_id' => 8],
            ['name' => '沖縄県', 'regions_id' => 8],
        ]);
    }
}
