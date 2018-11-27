<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('distrito_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->string('cidade');
            $table->string('slug');
            $table->timestamps();
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}
