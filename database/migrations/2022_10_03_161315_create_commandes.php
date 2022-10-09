<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string("identifiant_cmd", 150);
            $table->date("date_commande");
            $table->integer("qte_commande");
            $table->string("addresse_livraison", 255);
            $table->string("commentaire")->nullable();
            $table->integer('client_id')->index(); 
            $table->integer('article_id')->index();
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
        Schema::dropIfExists('commandes');
    }
};
