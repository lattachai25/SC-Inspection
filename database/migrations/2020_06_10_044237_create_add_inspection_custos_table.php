<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddInspectionCustosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_inspection_custos', function (Blueprint $table) {
            $table->increments('id');
                 // box 1
                $table->increments('ins')->nullable();
                $table->string('nametitle')->nullable();
                $table->string('firstname')->nullable();
                $table->string('lastname')->nullable();
                $table->string('address')->nullable();
                $table->string('province')->nullable();
                $table->string('district')->nullable();
                $table->string('subdistrict')->nullable();
                $table->string('postalcode')->nullable();
                $table->string('idcard')->nullable();
                $table->string('tel')->nullable();
                $table->string('customertype')->nullable();
                $table->string('contact')->nullable();
                $table->string('tel_contact')->nullable();
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
        Schema::dropIfExists('add_inspection_custos');
    }
}
