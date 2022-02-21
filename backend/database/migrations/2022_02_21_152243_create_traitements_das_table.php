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
            $table->integer('trimestre')->nullable();
            $table->integer('annee')->nullable();
            $table->integer('societe_id')->nullable();
            $table->integer('alloc_familiale')->nullable();
            $table->integer('ristourne')->nullable();
            $table->integer('autre_deduc')->nullable();
            $table->integer('precision')->nullable();
            $table->integer('avance')->nullable();
            $table->integer('reste')->nullable();
            $table->integer('numero_dts')->nullable();

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
