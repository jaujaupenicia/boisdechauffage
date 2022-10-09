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
        Schema::create('articles', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string("nom", 255);
            $table->text("description");
            $table->double("prix");
            $table->boolean("en_promo");
            $table->integer("stock_dispo");
            $table->double("prix_promo")->nullable();
            $table->string("image_article")->nullable();
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
        Schema::dropIfExists('articles');
    }
};
