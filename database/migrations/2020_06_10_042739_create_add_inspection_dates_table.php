<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddInspectionDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_inspection_dates', function (Blueprint $table) {
                $table->increments('id');
                // box 3
                $table->string('inspectiontype')->nullable();
                $table->string('inspector')->nullable();
                $table->string('inspectiondate')->nullable();
                $table->string('inspectiontime')->nullable();
                $table->string('package')->nullable();
                $table->string('remark')->nullable();

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
        Schema::dropIfExists('add_inspection_dates');
    }
}
