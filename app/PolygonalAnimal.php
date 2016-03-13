<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PolygonalAnimal extends Model{

	//Nom de la table
	protected $table = 'PolygonalAnimals';

	//De sa clé primaire SAUF quand c'est déjà id
	// protected $primaryKey = 'id';

	//Des éléments remplissables
	protected $fillable = ['name', 'price', 'color', 'img', 'link'];

	//Des attributs protégés
	protected $hidden = ['id', 'created_at', 'updated_at'];

	//Quand une table dépend d'une autre
	public function polygonalanimalscreator(){

		return $this -> belongsTo('App\PolygonalAnimalsCreator');

	}

}