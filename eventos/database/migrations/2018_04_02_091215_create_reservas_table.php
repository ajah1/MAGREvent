<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_evento');
            $table->integer('id_cliente');
            $table->string('descripcion');
            $table->string('cod_barras');
            $table->foreign('id_cliente')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_evento')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['id_cliente','id_evento','id']);
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
        Schema::dropIfExists('reservas');
    }
}
