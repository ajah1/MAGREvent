<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('cod_evento');
            $table->integer('tipoEntrada');
            $table->boolean('validacion');
            $table->string('informacion');
            $table->foreign('cod_evento')->references('id')->on('eventos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipoEntrada')->references('id')->on('tipos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('entradas');
    }
}
