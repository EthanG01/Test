<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolucradoProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involucrado_proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('involucrados_id');

            $table->unsignedBigInteger('proyecto_id');
            $table->unsignedBigInteger('inv1')->nullable();
            $table->unsignedBigInteger('inv2')->nullable();
            $table->unsignedBigInteger('inv3')->nullable();
            $table->unsignedBigInteger('inv4')->nullable();
            $table->unsignedBigInteger('inv5')->nullable();
            $table->unsignedBigInteger('inv6')->nullable();
            $table->unsignedBigInteger('inv7')->nullable();
            $table->unsignedBigInteger('inv8')->nullable();
            $table->unsignedBigInteger('inv9')->nullable();
            $table->unsignedBigInteger('inv10')->nullable();

            $table->timestamps();
            $table->foreign('involucrados_id')->references('id')
    ->on('involucrados')->onDelete('cascade');

    $table->foreign('inv1')->references('id')
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('inv2')->references('id')
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('inv3')->references('id')
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('inv4')->references('id')
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('inv5')->references('id')
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('inv6')->references('id')
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('inv7')->references('id')
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('inv8')->references('id')
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('inv9')->references('id')
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('inv10')->references('id')
    
    ->on('involucrados')->onDelete('cascade');
    $table->foreign('proyecto_id')->references('id')
    ->on('proyectos')->onDelete('cascade');
        });
    }
    
    


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('involucrado_proyectos');
    }
}
