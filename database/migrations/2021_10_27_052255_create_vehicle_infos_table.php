<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_infos', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_no')->unique();
            $table->string('model');
            $table->string('manufacture_date');
            $table->string('seat_capacity');
            $table->string('color');
            $table->string('vehicle_option');
            $table->string('wheeler_option');
            $table->unsignedBigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')
            ->on('vehicle_types')
            ->onDelete('restrict')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('vehicle_infos');
    }
}
