<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class professionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert
        ([
            ['name' => 'エンジニア'],
            ['name' => 'デザイナー'],
            ['name' => '営業'],
            ['name' => 'マーケティング'],
            ['name' => '教育'],
            ['name' => '医療'],
            ['name' => '法律'],
            ['name' => '販売'],
            ['name' => '企画'],
        ]);
    }
}
