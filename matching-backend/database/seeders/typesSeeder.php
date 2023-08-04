<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert
        ([
            [
                'name' => '株式会社tomoya',
                'is_su' => 1,
                'is_edit' => 1,
                'register_code' => '00000000',
                'created_at' => now(),
            ],
        ]);
    }
}
