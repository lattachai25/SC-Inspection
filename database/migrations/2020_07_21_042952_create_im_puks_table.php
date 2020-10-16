<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImPuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('im_puks', function (Blueprint $table) {
            $table->id();
            $table->string('id_car')->nullable();
            $table->string('id_dealer')->nullable();
            $table->string('status_admin')->nullable();
            $table->string('status_tech')->nullable();
            $table->string('confirm_admin')->nullable();
            $table->string('confirm_tech')->nullable();
            $table->string('im_0')->nullable();
            $table->string('im_1')->nullable();
            $table->string('im_2')->nullable();
            $table->string('im_3')->nullable();
            $table->string('im_4')->nullable();
            $table->string('im_5')->nullable();
            $table->string('im_6')->nullable();
            $table->string('im_7')->nullable();
            $table->string('im_A')->nullable();
            $table->string('im_B')->nullable();
            $table->string('im_C')->nullable();
            $table->string('im_D')->nullable();
            $table->string('im_V')->nullable();
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
        Schema::dropIfExists('im_puks');
    }
}
