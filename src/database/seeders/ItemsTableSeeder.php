<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '商品1',
            'price' => '1000',
            'description' => '商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明',
            'img_url' => '/image/item.jpeg',
            'user_id' => '1',
            'category_id' => '1',
            'condition_id' => '1',
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '商品2',
            'price' => '2000',
            'description' => '商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明',
            'img_url' => '/image/item.jpeg',
            'user_id' => '1',
            'category_id' => '2',
            'condition_id' => '2',
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '商品3',
            'price' => '1000',
            'description' => '商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明',
            'img_url' => '/image/item.jpeg',
            'user_id' => '1',
            'category_id' => '1',
            'condition_id' => '1',
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '商品4',
            'price' => '1000',
            'description' => '商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明',
            'img_url' => '/image/item.jpeg',
            'user_id' => '1',
            'category_id' => '1',
            'condition_id' => '1',
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '商品5',
            'price' => '1000',
            'description' => '商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明',
            'img_url' => '/image/item.jpeg',
            'user_id' => '1',
            'category_id' => '1',
            'condition_id' => '1',
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '商品6',
            'price' => '1000',
            'description' => '商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明商品説明',
            'img_url' => '/image/item.jpeg',
            'user_id' => '1',
            'category_id' => '1',
            'condition_id' => '1',
        ];
        DB::table('items')->insert($param);
    }
}
