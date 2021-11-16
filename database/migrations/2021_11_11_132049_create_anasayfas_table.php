<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnasayfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anasayfas', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('text');
            $table->unsignedInteger('image_id');
            $table->unsignedInteger('order')->default('999');
            $table->unsignedInteger('isactive');
            $table->text('link');
            $table->unsignedInteger('target');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anasayfas');
    }
}
