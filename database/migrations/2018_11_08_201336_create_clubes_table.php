<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cidade_id')->unsigned();
            $table->integer('distrito_id')->unsigned();
            $table->string('clube');
            $table->string('padrinho');
            $table->string('mascote')->nullable();
            $table->date('fundacao');
            $table->date('reconhecimento');
            $table->date('fechamento');
            $table->boolean('couchsurfing');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('orkut');
            $table->string('linkedin');
            $table->string('msn');
            $table->string('site');
            $table->timestamps();
            $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubes');
    }
}
