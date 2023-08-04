<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class client_accountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_accounts')->insert
        ([
            [
                'client_id' => 1,
                'name' => '山田太郎',
                'email_address' => 'yamada@sample.com',
                'password' => bcrypt('yamadatarou'),
                'created_at' => now(),
            ],
            [
                'client_id' => 2,
                'name' => '佐藤花子',
                'emil_address' => 'satou@sample.com',
                'password' => bcrypt('satouhanako'),
                'created_at' => now(),
            ],
            [
                'client_id' => 3,
                'name' => '鈴木豊',
                'emil_address' => 'suzuki@sample.com',
                'password' => bcrypt('suzukiyutaka'),
                'created_at' => now(),
            ],
        ]);
    }
}
