<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('canton_id');
            $table->string('nombreOrganizacion');
            $table->string('fotoOrganizacion');
            $table->string('direccion');
            $table->string('tipo');
            $table->timestamps();
            $table->foreign('canton_id')->references('id')
            ->on('cantons')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizacions');
    }
}
