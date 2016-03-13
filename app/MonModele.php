<?php namespace App;
//Le namespace spécifie le dossier où se situe le modèle
//Création d'un modèle d'exemple
// use permet d'utiliser la classe Model
  use Illuminate\Database\Eloquent\Model;
  
  //La classe MyModel hérite de la classe Model
  /*class MonModele extends Model
  {
  	//Les membres qui seront remplissables
  	protected $fillable = ['name', 'phone', 'secretAttribute', 'password'];
  //Ceux qui seront cachés
  	protected $hidden = ['secretAttribute', 'password'];
  } */
 
 class MyModel extends Model
 {
 	protected $fillable = ['nom', 'téléphone', 'AttributSecret', 'MotDePasse'];
 
 	protected $hidden = ['AttributSecret', 'MotDePasse'];
 } 