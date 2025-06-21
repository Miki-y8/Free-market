<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'image' => 'storage/images/Clock.png',
                'name' =>'腕時計',
                'price' =>'15000',
                'description' =>'スタイリッシュなデザインのメンズ腕時計',
                'information' =>'良好',
            ],
            [
                'image' => 'storage/images/HardDisk.png',
                'name' =>'HDD',
                'price' =>'5000',
                'description' =>'高速で信頼性の高いハードディスク',
                'information' =>'目立った傷や汚れなし',
            ],
            [
                'image' => 'storage/images/Onion.png',
                'name' =>'玉ねぎ3束',
                'price' =>'300',
                'description' =>'新鮮な玉ねぎ3束のセット',
                'information' =>'やや傷や汚れあり',
            ],
            [
                'image' => 'storage/images/LeatherShoes.png',
                'name' =>'革靴',
                'price' =>'4000',
                'description' =>'クラッシックなデザインの革靴',
                'information' =>'状態が悪い',
            ],
            [
                'image' => 'storage/images/Laptop.png',
                'name' =>'ノートPC',
                'price' =>'45000',
                'description' =>'高性能なノートパソコン',
                'information' =>'良好',
            ],
            [
                'image' => 'storage/images/Mic.png',
                'name' =>'マイク',
                'price' =>'8000',
                'description' =>'高音質のレコーディング用マイク',
                'information' =>'目立った傷や汚れなし',
            ],
            [
                'image' => 'storage/images/LadiesBag.png',
                'name' =>'ショルダーバッグ',
                'price' =>'3500',
                'description' =>'おしゃれなショルダーバッグ',
                'information' =>'やや傷や汚れあり',
            ],
            [
                'image' => 'storage/images/Tumbler.png',
                'name' =>'タンブラー',
                'price' =>'500',
                'description' =>'使いやすいタンブラー',
                'information' =>'状態が悪い',
            ],
            [
                'image' => 'storage/public/images/CoffeeGrinde.png',
                'name' =>'コーヒーミル',
                'price' =>'4000',
                'description' =>'手動のコーヒーミル',
                'information' =>'良好',
            ],
            [
                'image' => 'storage/images/Maketool.png',
                'name' =>'メイクセット',
                'price' =>'2500',
                'description' =>'便利なメイクアップセット',
                'information' =>'目立った傷や汚れなし',
            ],
    
        ]);
    }
}