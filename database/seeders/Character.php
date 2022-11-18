<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Character extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('character')->insert([
            ["name" => "アルベド", "storage" => "/media/character/アルベド.png", "nationality" => "モンド", "element_id" => 7, "weapon_type_id" => 1],
            ["name" => "ディルック", "storage" => "/media/character/ディルック.png", "nationality" => "モンド", "element_id" => 1, "weapon_type_id" => 2],
            ["name" => "エウルア", "storage" => "/media/character/エウルア.png", "nationality" => "モンド", "element_id" => 6, "weapon_type_id" => 2],
            ["name" => "甘雨", "storage" => "/media/character/甘雨.png", "nationality" => "璃月", "element_id" => 6, "weapon_type_id" => 3],
            ["name" => "胡桃", "storage" => "/media/character/胡桃.png", "nationality" => "璃月", "element_id" => 1, "weapon_type_id" => 4],
            ["name" => "ジン", "storage" => "/media/character/ジン.png", "nationality" => "モンド", "element_id" => 3, "weapon_type_id" => 1],
            ["name" => "楓原万葉", "storage" => "/media/character/楓原万葉.png", "nationality" => "稲妻", "element_id" => 3, "weapon_type_id" => 1],
            ["name" => "神里綾華", "storage" => "/media/character/神里綾華.png", "nationality" => "稲妻", "element_id" => 6, "weapon_type_id" => 1],
            ["name" => "刻晴", "storage" => "/media/character/刻晴.png", "nationality" => "璃月", "element_id" => 4, "weapon_type_id" => 1],
            ["name" => "クレー", "storage" => "/media/character/クレー.png", "nationality" => "モンド", "element_id" => 1, "weapon_type_id" => 5],
            ["name" => "モナ", "storage" => "/media/character/モナ.png", "nationality" => "モンド", "element_id" => 2, "weapon_type_id" => 5],
            ["name" => "七七", "storage" => "/media/character/七七.png", "nationality" => "璃月", "element_id" => 6, "weapon_type_id" => 1],
            ["name" => "タルタリヤ", "storage" => "/media/character/タルタリヤ.png", "nationality" => "スネジュナヤ", "element_id" => 2, "weapon_type_id" => 3],
            ["name" => "ヴェンティ", "storage" => "/media/character/ヴェンティ.png", "nationality" => "モンド", "element_id" => 3, "weapon_type_id" => 3],
            ["name" => "魈", "storage" => "/media/character/魈.png", "nationality" => "璃月", "element_id" => 3, "weapon_type_id" => 4],
            ["name" => "宵宮", "storage" => "/media/character/宵宮.png", "nationality" => "稲妻", "element_id" => 1, "weapon_type_id" => 3],
            ["name" => "钟离", "storage" => "/media/character/钟离.png", "nationality" => "璃月", "element_id" => 7, "weapon_type_id" => 4]
        ]);
    }
}
