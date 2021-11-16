<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subes', function (Blueprint $table) {
            $table->id();
            $table->text('isim');
            $table->text('adres');
            $table->text('telephone');
            $table->text('email');
            $table->unsignedInteger('konum1');
            $table->unsignedInteger('konum2');
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
        Schema::dropIfExists('subes');
    }
}
