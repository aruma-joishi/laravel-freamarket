<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '一郎',
            'img_url' => '/image/user.jpeg',
            'user_id' => '1',
            'postcode' => '111-1111',
            'address' => '東京都港区芝５丁目２９−２０ 610',
            'building' => 'マンション111号',
        ];
        DB::table('profiles')->insert($param);

        $param = [
            'name' => '二郎',
            'img_url' => '/image/user.jpeg',
            'user_id' => '2',
            'postcode' => '222-2222',
            'address' => '大阪府',
            'building' => 'マンション222号',
        ];
        DB::table('profiles')->insert($param);

        $param = [
            'name' => '三郎',
            'img_url' => '/image/user.jpeg',
            'user_id' => '3',
            'postcode' => '333-3333',
            'address' => '神奈川県',
            'building' => 'マンション333号',
        ];
        DB::table('profiles')->insert($param);

        $param = [
            'name' => '四郎',
            'img_url' => '/image/user.jpeg',
            'user_id' => '4',
            'postcode' => '444-4444',
            'address' => '東京都',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);

        $param = [
            'name' => '五郎',
            'img_url' => '/image/user.jpeg',
            'user_id' => '5',
            'postcode' => '444-4444',
            'address' => '東京都',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);

        $param = [
            'name' => '六郎',
            'img_url' => '/image/user.jpeg',
            'user_id' => '6',
            'postcode' => '444-4444',
            'address' => '東京都',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
    }
}
