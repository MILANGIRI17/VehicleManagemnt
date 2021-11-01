<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_infos', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('image')->nullable();
            $table->string('citizenship_no')->unique();
            $table->string('license_number')->unique();
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
        Schema::dropIfExists('driver_infos');
    }
}
