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
            'content' => '1.商品のお届けについて'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'content' => '2.商品の交換について'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'content' => '3.商品トラブル'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'content' => '4.ショップへのお問い合わせ'
        ];
        DB::table('categories')->insert($param);
        $param = [
            'content' => '5.その他'
        ];
        DB::table('categories')->insert($param);
    }
}
