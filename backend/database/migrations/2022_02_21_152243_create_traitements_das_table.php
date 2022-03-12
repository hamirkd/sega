<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraitementsDasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traitements_das', function (Blueprint $table) {
            $table->id();
            $table->integer('annee')->nullable();
            $table->integer('societe_id')->nullable();
            $table->integer('brut_presence')->nullable();
            $table->integer('av_eau_elec')->nullable();
            $table->integer('brut_conge')->nullable();
            $table->integer('prime_impo')->nullable();
            $table->integer('prime_non_impo')->nullable();
            $table->integer('av_nourriture')->nullable();
            $table->integer('irpp')->nullable();
            $table->integer('tcs')->nullable();
            $table->integer('fnh')->nullable();
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
        Schema::dropIfExists('traitements_das');
    }
}
