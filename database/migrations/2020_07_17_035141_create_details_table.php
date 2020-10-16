<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();

            $table->string('id_car')->nullable();

            $table->string('carrs01')->nullable();
            $table->string('carrs02')->nullable();
            $table->string('carrs03')->nullable();
            $table->string('carrs04')->nullable();
            $table->string('carrs05')->nullable();
            $table->string('carrs06')->nullable();
            $table->string('carrs07')->nullable();
            $table->string('carrs08')->nullable();
            $table->string('carrs09')->nullable();
            $table->string('carrs10')->nullable();
            $table->string('carrs11')->nullable();
            $table->string('carrs12')->nullable();

            $table->string('carin01')->nullable();
            $table->string('carin02')->nullable();
            $table->string('carin03')->nullable();
            $table->string('carin04')->nullable();
            $table->string('carin05')->nullable();
            $table->string('carin06')->nullable();
            $table->string('carin07')->nullable();
            $table->string('carin08')->nullable();

            $table->string('exterior_01')->nullable();
            $table->string('exterior_02')->nullable();
            $table->string('exterior_03')->nullable();
            $table->string('exterior_04')->nullable();
            $table->string('exterior_05')->nullable();
            $table->string('exterior_06')->nullable();
            $table->string('exterior_07')->nullable();
            $table->string('exterior_08')->nullable();
            $table->string('exterior_09')->nullable();
            $table->string('exterior_10')->nullable();
            $table->string('exterior_11')->nullable();
            $table->string('exterior_12')->nullable();
            $table->string('exterior_13')->nullable();
            $table->string('exterior_14')->nullable();
            $table->string('exterior_15')->nullable();
            $table->string('exterior_16')->nullable();
            $table->string('exterior_17')->nullable();
            $table->string('exterior_18')->nullable();
            $table->string('exterior_19')->nullable();
            $table->string('exterior_20')->nullable();

            $table->string('interior_01')->nullable();
            $table->string('interior_02')->nullable();
            $table->string('interior_03')->nullable();
            $table->string('interior_04')->nullable();
            $table->string('interior_05')->nullable();
            $table->string('interior_06')->nullable();
            $table->string('interior_07')->nullable();
            $table->string('interior_08')->nullable();
            $table->string('interior_09')->nullable();
            $table->string('interior_10')->nullable();
            $table->string('interior_11')->nullable();
            $table->string('interior_12')->nullable();
            $table->string('interior_13')->nullable();
            $table->string('interior_14')->nullable();
            $table->string('interior_15')->nullable();

            $table->string('chasis_01')->nullable();
            $table->string('chasis_02')->nullable();
            $table->string('chasis_03')->nullable();

            $table->string('comment')->nullable();

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
        Schema::dropIfExists('details');
    }
}
