<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise_infos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string("nom", 255);
            $table->time("heure_ouverture");
            $table->time("heure_fermerture");
            $table->string("addresse", 255);
            $table->string("email_support", 255);
            $table->string("telephone", 255);
            $table->string("lien_support_whatsapp", 255)->nullable();
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
        Schema::dropIfExists('entreprise_infos');
    }
};
