<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHizmetlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hizmetlers', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('menu_name')->max(150);
            $table->unsignedInteger('image_id')->nullable();
            $table->text('text')->max(255)->nullable();
            $table->text('slug');
            $table->unsignedInteger('order')->default(999);
            $table->unsignedInteger('is_active')->max(2)->default(1);
            $table->unsignedInteger('is_main')->max(2);
            $table->longText('content_main_page')->nullable();
            $table->longText('content_sub_page')->nullable();
            $table->string('seo_title')->max(60)->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('meta_description')->max(120)->nullable();
            $table->unsignedInteger('parent_id')->max(2)->nullable();
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
        Schema::dropIfExists('hizmetlers');
    }
}
