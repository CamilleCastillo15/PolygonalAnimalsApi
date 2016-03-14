<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PolygonalAnimalsCreator extends Model 
{
	protected $table = 'PolygonalAnimalsCreators';
	protected $fillable = ['id', 'name', 'phone'];
	protected $hidden = ['id', 'updated_at', 'created_at'];

	//Une entrée de PolygonalAnimalsCreator peut avoir plusieurs PolygonalAnimals
	public function polygonalanimals() {
		return $this->hasMany('App\PolygonalAnimal');
	}
}