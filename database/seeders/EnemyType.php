<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnemyType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('enemy_type')->insert([
            ["name" => "元素生命"],
            ["name" => "ヒルチャール部族"],
            ["name" => "アビス"],
            ["name" => "ファデュイ"],
            ["name" => "自律装置"],
            ["name" => "その他人間勢力"],
            ["name" => "異種の魔獣"],
            ["name" => "名前を覚えるべき強敵"]
        ]);
    }
}
