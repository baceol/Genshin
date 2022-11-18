<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacter extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("storage");
            $table->string("nationality");
            $table->foreignId("element_id")->constrained("element");
            $table->foreignId("weapon_type_id")->constrained("weapon_type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character');
    }
}
