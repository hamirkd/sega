<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclarationsRetenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declarations_retenues', function (Blueprint $table) {
            $table->id();
            $table->integer('mois')->nullable();
            $table->integer('annee')->nullable();
            $table->integer('societe_id')->nullable();
            $table->string('mode_reglement',100)->nullable();
            $table->string('numero_cheque',100)->nullable();
            $table->string('iban',100)->nullable();
            $table->string('bic',100)->nullable();
            $table->date('date_versement')->nullable();
            $table->date('date_signature')->nullable();
            $table->string('lieu_signature',100)->nullable();
            $table->integer('irpp')->nullable()->default(0);
            $table->integer('tcs')->nullable()->default(0);
            $table->integer('fnh')->nullable()->default(0);
            $table->integer('cfp')->nullable()->default(0);
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
        Schema::dropIfExists('declarations_retenues');
    }
}
