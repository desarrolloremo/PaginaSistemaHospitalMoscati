<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorioDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorio_doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('especialidad')->nullable();
            $table->string('subespecialidad')->nullable();
            $table->string('telefono')->nullable();
            $table->string('consultorio')->nullable();
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
        Schema::dropIfExists('directorio_doctors');
    }
}
