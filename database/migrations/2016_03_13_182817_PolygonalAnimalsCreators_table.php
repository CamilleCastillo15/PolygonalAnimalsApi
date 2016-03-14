<?php

//Php artisan permet de créer des migrations grâce à une commande

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Il faut pour cela créer une classe qui dérive de Migration
class PolygonalAnimalsCreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PolygonalAnimalsCreators', function (Blueprint $table) {
            //Il faut spécifier les colonnes de la table comme indiqué dans les modèles de la Base de Données
            //id va être auto - incrémenté 
            $table->increments('id');
            $table->string('name');
            $table->integer('phone');
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
        Schema::drop('PolygonalAnimalsCreators');
    }
}
