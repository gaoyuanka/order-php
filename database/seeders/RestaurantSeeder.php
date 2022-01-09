<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ja_JP');
        $rest = [
            'user_id' => 1,
            'name' => '焼き小籠包',
            'furi_name' => 'ヤキショウロンポ',
            'address' => '新宿区新宿町1-1-1',
            'post' => '0020002',
            'rest_kind' => '0',
            'open_time' => '00:00',
            'close_time' => '12:00',
            'link' => 'http://test.com',
            'info' => 'abcdefg',
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        \Illuminate\Support\Facades\DB::table('restaurants')->insert($rest);
        return ;
    }
}
