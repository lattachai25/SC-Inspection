<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesMnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_mns', function (Blueprint $table) {
            $table->id();
            $table->string('id_car')->nullable();
            $table->string('name_image')->nullable();
            $table->string('type_image')->nullable();
            $table->string('id_dealer')->nullable();
            $table->string('status')->nullable();
            $table->string('confirm')->nullable();
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
        Schema::dropIfExists('images_mns');
    }
}
