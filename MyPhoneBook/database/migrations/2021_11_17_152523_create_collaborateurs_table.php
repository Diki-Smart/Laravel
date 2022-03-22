<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateurs', function (Blueprint $table) {
            $table->id();
            $table->string('civilite');
            $table->string('nom')->unique();
            $table->string('prenom')->unique();
            $table->string('rue');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('numero_de_telephone')->unique();
            $table->string('email')->unique();
            $table->foreignId('entreprise_id');
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
        Schema::dropIfExists('collaborateurs');
    }
}
