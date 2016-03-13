<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PolygonalAnimalsCreator extends Model{

	//Nom de la table
	protected $table = 'PolygonalAnimalsCreators';

	//Des éléments remplissables
	protected $fillable = ['id', 'name', 'phone'];

	//Des attributs protégés
	protected $hidden = ['id', 'updated_at', 'created_at'];

	//Une table de PolygonalAnimalsCreator peut avoir plusieurs PolygonAnimals, car un créateur peut créer plusieurs animaux
	public function polygonalanimals(){

		return $this -> hasMany('App\PolygonalAnimal');

	}

}