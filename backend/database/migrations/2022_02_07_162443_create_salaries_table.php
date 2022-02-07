<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('societe_id');
            $table->string('matricule',100)->nullable();
            $table->string('nif',100)->nullable();
            $table->string('nom',100);
            $table->string('prenom',100);
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
            $table->tinyInteger('deb10')->nullable();
            $table->tinyInteger('deb11')->nullable();
            $table->tinyInteger('fin12')->nullable();
            $table->tinyInteger('fin13das')->nullable();
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
        Schema::dropIfExists('salaries');
    }
}
