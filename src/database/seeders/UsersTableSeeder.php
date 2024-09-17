<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'email' => 'ichiro@com',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'jiro@com',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'saburo@com',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'shiro@com',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'goro@com',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'rokuro@com',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);
    }
}
