<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDasQuittancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('das_quittances', function (Blueprint $table) {
            $table->id();
            $table->integer('societe_id');
            $table->integer('annee');
            $table->integer('mois');
            $table->integer('montant');
            $table->string('date_quittance',100)->nullable();
            $table->string('n_quittance',100)->nullable();
            $table->string('nature',100)->nullable();
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
        Schema::dropIfExists('das_quittances');
    }
}
