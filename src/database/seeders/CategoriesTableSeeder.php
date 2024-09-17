<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'おもちゃ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '本',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '家電',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'CD・DVD',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'スポーツ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '楽器',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'アウトドア',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'コスメ・美容',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '健康',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '食品・飲料',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'キッチン・日用品',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '家具・インテリア',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'ペット用品',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'DIY・工具',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '手芸',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'ガーデニング',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'メンズ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'レディース',
        ];
        DB::table('categories')->insert($param);

    }
}
