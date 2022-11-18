<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Element extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('element')->insert([
            ["name" => "炎", "color" => "rgba(255, 68, 0, 0.8)" , "storage" => "/media/element/炎.png"],
            ["name" => "水", "color" => "rgba(0, 170, 255, 0.8)" , "storage" => "/media/element/水.png"],
            ["name" => "風", "color" => "rgba(0, 255, 170, 0.9)" , "storage" => "/media/element/風.png"],
            ["name" => "雷", "color" => "rgba(255, 0, 255, 0.9)" , "storage" => "/media/element/雷.png"],
            ["name" => "草", "color" => "rgba(136, 255, 0, 0.9)" , "storage" => "/media/element/草.png"],
            ["name" => "氷", "color" => "rgba(68, 255, 255, 0.9)" , "storage" => "/media/element/氷.png"],
            ["name" => "岩", "color" => "rgba(255, 170, 0, 0.9)" , "storage" => "/media/element/岩.png"]
        ]);
    }
}
