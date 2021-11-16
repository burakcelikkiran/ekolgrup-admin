<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKalitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalites', function (Blueprint $table) {
            $table->id();
            $table->text('menu_name')->max(25);
            $table->string('title')->max(50);
            $table->text('content')->nullable();
            $table->integer('order',)->default(999)->nullable();
            $table->integer('isactive')->nullable();
            $table->integer('ispublish')->nullable();
            $table->string('seo_title')->max(60)->nullable();
            $table->string('about')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('meta_description')->max(120)->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('kalites');
    }
}
