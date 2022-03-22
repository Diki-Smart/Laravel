<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            
            $table->id();
            $table->string('nom')->unique(); //(obligatoire, unique)
            $table->string('rue')->nullable(false); //(obligatoire)
            $table->string('code postal')->nullable(false); //(obligatoire, chaine de taille 5)
            $table->string('ville'); //(obligatoire)
            $table->string('téléphone')->unique(); //(Si rempli, au format téléphone portable français et unique)
            $table->string('Email')->unique(); //(obligatoire, unique et au format email ex: a@a.a)

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprise');
    }
}
