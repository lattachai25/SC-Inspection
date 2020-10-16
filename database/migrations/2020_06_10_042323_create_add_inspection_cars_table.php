<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddInspectionCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_inspection_cars', function (Blueprint $table) {
            $table->increments('id');

                // box 2
            $table->string('carbrand')->nullable();
            $table->string('carmodel')->nullable();
            $table->string('submodel')->nullable();
            $table->string('oldcolor')->nullable();
            $table->string('newcolor')->nullable();
            $table->string('year')->nullable();
            $table->string('seatnum')->nullable();
            $table->string('place')->nullable();
            $table->string('registertype')->nullable();
            $table->string('type_car')->nullable();
            $table->string('carregnum')->nullable();
            $table->string('mileage')->nullable();
            $table->string('dateregister')->nullable();
            $table->string('numowners')->nullable();
            $table->string('cc')->nullable();
            $table->string('geartype')->nullable();
            $table->string('engine')->nullable();
            $table->string('vin')->nullable();
            $table->string('benzine')->nullable();
            $table->string('diesel')->nullable();
            $table->string('hybrid')->nullable();
            $table->string('electric')->nullable();
            $table->string('lpg')->nullable();
            $table->string('ngv')->nullable();
            $table->string('cng')->nullable();
            $table->string('imported_car')->nullable();
            $table->string('carinsurance')->nullable();
            $table->string('expinsurance')->nullable();
            $table->string('insurance')->nullable();
            $table->string('tent')->nullable();
            $table->string('fromtent')->nullable();
            $table->string('price')->nullable();
            $table->string('payment')->nullable();

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
        Schema::dropIfExists('add_inspection_cars');
    }
}
