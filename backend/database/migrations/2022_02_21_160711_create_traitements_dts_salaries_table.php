<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraitementsDtsSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traitements_dts_salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('traitements_dts_id');
            
            // Les informations des salariés. C'est une duplication de code
            $table->string('matricule',100)->nullable();
            $table->string('nom',100)->nullable();
            $table->string('prenom',100)->nullable();

            // Information DTS

            
            $table->string('n_cnss',100)->nullable();
            $table->string('n_cnamgs',100)->nullable();
            $table->string('date_embauche',100)->nullable();
            $table->string('date_depart',100)->nullable();
            $table->string('tx_cnamgs',100)->nullable();
            $table->string('tx_cnss',100)->nullable();

            $table->integer('bpcnss1')->nullable();
            $table->integer('bpcnam1')->nullable();
            $table->integer('bdplaf1')->nullable();
            $table->integer('njrcnss1')->nullable();
            $table->integer('njrcnam1')->nullable();
        
            $table->integer('bpcnss2')->nullable();
            $table->integer('bpcnam2')->nullable();
            $table->integer('bdplaf2')->nullable();
            $table->integer('njrcnss2')->nullable();
            $table->integer('njrcnam2')->nullable();

            $table->integer('bpcnss3')->nullable();
            $table->integer('bpcnam3')->nullable();
            $table->integer('bdplaf3')->nullable();
            $table->integer('njrcnss3')->nullable();
            $table->integer('njrcnam3')->nullable();

            $table->string('code_etablissement')->nullable();

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
        Schema::dropIfExists('traitements_dts_salaries');
    }
}
