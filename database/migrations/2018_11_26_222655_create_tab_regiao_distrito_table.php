<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabRegiaoDistritoTable extends Migration
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'mssql';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mssql')->create('Tab_Regiao_Distrito', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('ID_REGIAO')->unsigned();
            $table->integer('ID_DISTRITO')->unsigned();
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
        Schema::connection('mssql')->dropIfExists('Tab_Regiao_Distrito');
    }
}
