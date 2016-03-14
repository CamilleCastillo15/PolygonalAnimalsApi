<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PolygonalAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PolygonalAnimals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('price');
            $table->string('color');
            $table->string('img');
            $table->string('link');
            $table->integer('creator_id')->unsigned();
            //On peut aussi spécifier la clé étrange de la table qui permet de la relier à une autre
            $table->foreign('creator_id')->references('id')->on('PolygonalAnimalsCreators');
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
        Schema::drop('PolygonalAnimals');
    }
}
