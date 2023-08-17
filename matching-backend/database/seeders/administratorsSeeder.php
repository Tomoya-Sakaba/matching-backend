<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class administratorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert([
            [
                'name' => '山田太郎',
                'name_kana' => 'ヤマダタロウ',
                'phone_number' => '09011112222',
                'email_address' => 'yamada@sample.com',
                'password' => bcrypt('Yamadatarou1'),
                'register_id' => '00000001',
                'created_at' => now(),
            ],
            [
                'name' => '佐藤花子',
                'name_kana' => 'サトウハナコ',
                'phone_number' => '09011112222',
                'emil_address' => 'satou@sample.com',
                'password' => bcrypt('Satouhanako2'),
                'register_id' => '00000001',
                'created_at' => now(),
            ],
            [
                'name' => '鈴木豊',
                'name_kana' => 'スズキユタカ',
                'phone_number' => '09011112222',
                'emil_address' => 'suzuki@sample.com',
                'password' => bcrypt('Suzukiyutaka3'),
                'register_id' => '00000002',
                'created_at' => now(),
            ],
        ]);
    }
}
