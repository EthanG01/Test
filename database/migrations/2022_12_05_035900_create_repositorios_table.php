<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositorios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('carrera_id');
            $table->unsignedBigInteger('autor_id');
            $table->string('nombre');
            $table->date('fecha')->format('d/m/Y');
            $table->string('descripcion');
            $table->string('tipo');
            $table->string('documento');
            $table->boolean('estado');
            $table->integer('idUsuario');
            $table->timestamps();
            $table->foreign('carrera_id')->references('id')
            ->on('carreras')->onDelete('cascade');
            $table->foreign('autor_id')->references('id')
            ->on('autors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repositorios');
    }
}
