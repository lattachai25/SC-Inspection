<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageFireFloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_fire_floods', function (Blueprint $table) {
            $table->increments('id_imf');
            $table->char('id_car',10)->nullable();
            $table->char('id_dealer',10)->nullable();
            $table->char('confirm_tech',4)->nullable();
            $table->string('im_fire1',50)->nullable();
            $table->string('im_fire2',50)->nullable();
            $table->string('im_flood1',50)->nullable();
            $table->string('im_flood2',50)->nullable();
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
        Schema::dropIfExists('image_fire_floods');
    }
}
