<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('code',50)->nullable();
            $table->string('regime',50)->nullable();
            $table->string('raison_sociale',100)->nullable();
            $table->string('sigle',50)->nullable();
            $table->string('rccm',50)->nullable();
            $table->string('cnss',50)->nullable();
            $table->string('contribuable',50)->nullable();
            $table->string('statistique',50)->nullable();
            $table->string('activite',50)->nullable();
            $table->date('date_creation' )->nullable();
            $table->date('date_mise_service')->nullable();
            $table->date('date_effet')->nullable();
            $table->date('date_immatriculation')->nullable();
            $table->string('adresse',50)->nullable();
            $table->string('code_postal',50)->nullable();
            $table->string('ville',50)->nullable();
            $table->string('bp',50)->nullable();
            $table->string('telephone',50)->nullable();
            $table->string('fax',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('nif',50)->nullable();
            $table->string('source_donnees',50)->nullable();
            $table->string('code_residence',50)->nullable();
            $table->string('adressen',50)->nullable();
            $table->string('rue',50)->nullable();
            $table->string('lieu_dit',50)->nullable();
            $table->string('quartier',50)->nullable();
            $table->string('arrondissement',50)->nullable();
            $table->string('departement',50)->nullable();
            $table->string('province',50)->nullable(); 
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
        Schema::dropIfExists('societes');
    }
}
