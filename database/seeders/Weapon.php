<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Weapon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('weapon')->insert([
            ["name" => "風鷹剣", "storage" => "/media/weapon/霧切の廻光.png" , "weapon_type_id" => "1"],
            ["name" => "天空の刃", "storage" => "/media/weapon/天空の刃.png" , "weapon_type_id" => "1"],
            ["name" => "斬山の刃", "storage" => "/media/weapon/斬山の刃.png" , "weapon_type_id" => "1"],
            ["name" => "磐岩結緑", "storage" => "/media/weapon/磐岩結緑.png" , "weapon_type_id" => "1"],
            ["name" => "蒼古なる自由への誓い", "storage" => "/media/weapon/蒼古なる自由への誓い.png" , "weapon_type_id" => "1"],
            ["name" => "霧切の廻光", "storage" => "/media/weapon/霧切の廻光.png" , "weapon_type_id" => "1"],
            ["name" => "狼の末路", "storage" => "/media/weapon/狼の末路.png" , "weapon_type_id" => "2"],
            ["name" => "天空の傲", "storage" => "/media/weapon/天空の傲.png" , "weapon_type_id" => "2"],
            ["name" => "無工の剣", "storage" => "/media/weapon/無工の剣.png" , "weapon_type_id" => "2"],
            ["name" => "松韻の響く頃", "storage" => "/media/weapon/松韻の響く頃.png" , "weapon_type_id" => "2"],
            ["name" => "アモスの弓", "storage" => "/media/weapon/アモスの弓.png" , "weapon_type_id" => "3"],
            ["name" => "天空の翼", "storage" => "/media/weapon/天空の翼.png" , "weapon_type_id" => "3"],
            ["name" => "終焉を嘆く詩", "storage" => "/media/weapon/終焉を嘆く詩.png" , "weapon_type_id" => "3"],
            ["name" => "飛雷の鳴弦", "storage" => "/media/weapon/飛雷の鳴弦.png" , "weapon_type_id" => "3"],
            ["name" => "和璞鳶", "storage" => "/media/weapon/和璞鳶.png" , "weapon_type_id" => "4"],
            ["name" => "天空の脊", "storage" => "/media/weapon/天空の脊.png" , "weapon_type_id" => "4"],
            ["name" => "破天の槍", "storage" => "/media/weapon/破天の槍.png" , "weapon_type_id" => "4"],
            ["name" => "護摩の杖", "storage" => "/media/weapon/護摩の杖.png" , "weapon_type_id" => "4"],
            ["name" => "草薙の稲光", "storage" => "/media/weapon/草薙の稲光.png" , "weapon_type_id" => "4"],
            ["name" => "天空の巻", "storage" => "/media/weapon/天空の巻.png" , "weapon_type_id" => "5"],
            ["name" => "四風原典", "storage" => "/media/weapon/四風原典.png" , "weapon_type_id" => "5"],
            ["name" => "浮世の錠", "storage" => "/media/weapon/浮世の錠.png" , "weapon_type_id" => "5"],
        ]);
    }
}
