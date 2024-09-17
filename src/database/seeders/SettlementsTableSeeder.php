<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettlementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'settlement' => 'クレジットカード',
        ];
        DB::table('settlements')->insert($param);

        $param = [
            'settlement' => 'コンビニ',
        ];
        DB::table('settlements')->insert($param);

        $param = [
            'settlement' => '銀行振込',
        ];
        DB::table('settlements')->insert($param);
    }
}
