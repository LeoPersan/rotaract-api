<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clube_id')->unsigned();
            $table->date('inicio');
            $table->date('fim')->nullable();
            $table->timestamps();
            $table->foreign('clube_id')->references('id')->on('clubes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionamentos');
    }
}
