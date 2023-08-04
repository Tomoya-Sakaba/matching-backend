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
        DB::table('administrators')->insert
        ([
            [
                'name' => '山田太郎',
                'email_address' => 'yamada@sample.com',
                'password' => bcrypt('yamadatarou'),
                'register_id' => 1,
                'created_at' => now(),
            ],
            [
                'name' => '佐藤花子',
                'emil_address' => 'satou@sample.com',
                'password' => bcrypt('satouhanako'),
                'register_id' => 1,
                'created_at' => now(),
            ],
            [
                'name' => '鈴木豊',
                'emil_address' => 'suzuki@sample.com',
                'password' => bcrypt('suzukiyutaka'),
                'register_id' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}