<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraitementsDasSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traitements_das_salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('traitements_das_id');
            
            // Les informations des salariés. C'est une duplication de code
            $table->string('matricule',100)->nullable();
            $table->string('nif',100)->nullable();
            $table->string('nom',100)->nullable();
            $table->string('prenom',100)->nullable();
            $table->string('emploi',100)->nullable();
            $table->string('niveau',100)->nullable();
            $table->string('nationalite',100)->nullable();
            $table->tinyInteger('age')->nullable();
            $table->string('sexe')->nullable();
            $table->tinyInteger('enfants')->nullable();
            $table->string('telephone',100)->nullable();
            $table->string('code_postal',100)->nullable();
            $table->string('ville',100)->nullable();
            $table->string('emploi_occupe',100)->nullable();
            $table->string('situation_familiale')->nullable();

            // information du conjoint
            
            $table->string('nif_conjoint',100)->nullable();
            $table->string('nom_conjoint',100)->nullable();
            $table->string('prenom_conjoint',100)->nullable();
            $table->string('nom_jeune_fille_conjoint',100)->nullable();
            $table->string('profession_conjoint',100)->nullable();
            $table->string('employeur_conjoint',100)->nullable();
            $table->string('telephone_conjoint',100)->nullable();
            $table->string('code_postal_conjoint',100)->nullable();
            $table->string('ville_conjoint',100)->nullable();

            $table->integer('irpp')->nullable();
            $table->integer('tcs')->nullable();
            $table->integer('fnh')->nullable();
            $table->integer('cfp')->nullable();
            $table->integer('brute')->nullable();
            $table->integer('avlog')->nullable();
            $table->integer('av_nour')->nullable();
            $table->integer('prim_impo')->nullable();
            $table->integer('brut_conge')->nullable();
            $table->integer('salaire_brut')->nullable();
            $table->integer('total_brute')->nullable();
            $table->integer('total')->nullable();
            $table->integer('primes_non_impo')->nullable();
            $table->integer('deb10')->nullable();
            $table->integer('deb11')->nullable();
            $table->integer('fin12')->nullable();
            $table->integer('fin13das')->nullable();


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
        Schema::dropIfExists('traitements_das_salaries');
    }
}
