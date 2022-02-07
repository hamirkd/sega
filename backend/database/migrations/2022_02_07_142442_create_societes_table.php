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
            $table->string('code');
            $table->string('regime');
            $table->string('raison_sociale');
            $table->string('sigle');
            $table->string('rccm');
            $table->string('cnss');
            $table->string('contribuable');
            $table->string('statistique');
            $table->string('activite');
            $table->date('date_creation');
            $table->date('date_mise_service');
            $table->date('date_effet');
            $table->date('date_immatriculation');
            $table->string('adresse');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('bp');
            $table->string('telephone');
            $table->string('fax');
            $table->string('email');
            $table->string('nif');
            $table->string('source_donnees');
            $table->string('code_residence');
            $table->string('adressen');
            $table->string('rue');
            $table->string('lieu_dit');
            $table->string('quartier');
            $table->string('arrondissement');
            $table->string('departement');
            $table->string('province'); 
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
