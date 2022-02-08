<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubriquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubriques', function (Blueprint $table) {
            $table->id();
            $table->integer('societe_id')->nullable();
            $table->string('code',100)->nullable();
            $table->string('sens',100)->nullable();
            $table->string('intitule',100)->nullable();
            $table->string('type',100)->nullable();
            $table->string('gain',100)->nullable();
            $table->string('imprimable',100)->nullable();
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
        Schema::dropIfExists('rubriques');
    }
}
