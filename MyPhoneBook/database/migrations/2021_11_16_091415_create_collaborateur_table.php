<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateur', function (Blueprint $table) {

            $table->id();
            $table->string("civilité"); //(Homme/Femme/Non-binaire)
            $table->string("nom");          // (obligatoire)
            $table->string('prénom');       // (obligatoire)
            $table->string('rue');          // (obligatoire)
            $table->string('code postal');  // (obligatoire, chaine de taille 5)
            $table->string('ville');        // (obligatoire)
            $table->string('Numéro de téléphone');    // (Si rempli, unique et au format téléphone portable français)
            $table->string('Email');                  //(obligatoire, unique et au format email ex: a@a.a)
            $table->foreingKey('entreprise');         // (Relation entre l’entité Entreprise et l’entité Collaborateur) (obligatoire)
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborateur');
    }
}
