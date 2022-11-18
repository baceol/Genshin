<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('weapon_type')->insert([
            ["name" => "片手剣", "storage" => "/media/weapon_type/片手剣.png"],
            ["name" => "両手剣", "storage" => "/media/weapon_type/両手剣.png"],
            ["name" => "弓", "storage" => "/media/weapon_type/弓.png"],
            ["name" => "長柄武器", "storage" => "/media/weapon_type/長柄武器.png"],
            ["name" => "法器", "storage" => "/media/weapon_type/法器.png"]
        ]);
    }
}
