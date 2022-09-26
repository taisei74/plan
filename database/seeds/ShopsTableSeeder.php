<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
            'name' => 'サイゼリア',
            'money' => 500,
            'time' => 60,
            'created_at' =>new Datetime(),
            'updated_at' =>new Datetime()
            ],
            [
                'name' => '馬力',
            'money' => 1500,
            'time' => 60,
            'created_at' =>new Datetime(),
            'updated_at' =>new Datetime()
            ],
            [
                'name' => 'ダーツ',
            'money' => 1000,
            'time' => 60,
            'created_at' =>new Datetime(),
            'updated_at' =>new Datetime()
            ],
             [
                'name' => 'ガスト',
            'money' => 800,
            'time' => 30,
            'created_at' =>new Datetime(),
            'updated_at' =>new Datetime()
            ],
             [
                'name' => '鳥貴族',
            'money' => 2000,
            'time' => 90,
            'created_at' =>new Datetime(),
            'updated_at' =>new Datetime()
            ],
             [
                'name' => '錦糸公園',
            'money' => 0,
            'time' => 30,
            'created_at' =>new Datetime(),
            'updated_at' =>new Datetime()
            ],
            ]);
    }
}