<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('user')->insert([
            ["name" => "traveler", "username" => "admin" , "password" => "adminx8"],
            ["name" => "aether", "username" => "aether" , "password" => "12345"]
        ]);
    }
}
