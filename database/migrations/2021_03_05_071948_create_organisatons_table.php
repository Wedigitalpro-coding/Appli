<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisatonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisatons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('domaine');
            $table->string('specialite');
            $table->string('adresse');
            $table->integer('nbrDepartement');
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
        Schema::dropIfExists('organisatons');
    }
}
