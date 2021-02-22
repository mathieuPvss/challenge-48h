<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type');
            $table->boolean('produit');
            $table->boolean('humain');
            $table->boolean('institutionnelle');
            $table->string('format');
            $table->string('credits');
            $table->boolean('droits');
            $table->boolean('copyright');
            $table->date('dtn_fin_droits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
