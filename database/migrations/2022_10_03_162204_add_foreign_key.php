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

        Schema::table('commandes', function (Blueprint $table) {
            $table->foreign(['client_id'])->references(['id'])->on('clients');
        });

        Schema::table('commandes', function (Blueprint $table) {
            $table->foreign(['article_id'])->references(['id'])->on('articles');
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
