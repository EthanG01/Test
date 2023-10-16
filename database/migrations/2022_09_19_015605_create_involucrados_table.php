<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolucradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involucrados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organizacion_id');
            $table->string('nombrePersona');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('codigo');
            $table->string('telefonoPersona');
            $table->string('emailPersona')->unique();

            $table->string('implicacion');
            $table->text('descripcionInvolucrado');
            $table->timestamps();
            $table->foreign('organizacion_id')->references('id')
            ->on('organizacions')->onDelete('cascade');
            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('involucrados');
    }
}
