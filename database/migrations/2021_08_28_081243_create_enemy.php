<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnemy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enemy', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("storage");
            $table->foreignId("element_id")->constrained("element");
            $table->foreignId("enemy_type_id")->constrained("enemy_type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enemy');
    }
}
