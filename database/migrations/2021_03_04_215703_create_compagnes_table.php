<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompagnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compagnes', function (Blueprint $table) {
            $table->bigIncrements('id_Compagne');
            $table->integer('numCompagne');
            $table->date('dateEnvoi');
            $table->date('dateRecepttion');
            $table->date('dernierDelaiEvaluation');  
            $table->unsignedBigInteger('id_Organisation');
            $table->unsignedBigInteger('idSujet');
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
        Schema::dropIfExists('compagnes');
    }
}
