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
        Schema::create('clients', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string("nom", 255);
            $table->string("prenom", 255);
            $table->string("email", 255);
            $table->string("telephone", 255)->nullable();
            $table->string("adresse", 255)->nullable();
            $table->string("password", 255);
            $table->boolean("isAdmin")->default(false);
            $table->string("lien_whatsapp")->nullable();
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
        Schema::dropIfExists('clients');
    }
};
