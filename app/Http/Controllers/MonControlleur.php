<?php namespace App\Http\Controllers;
  
 class MonControlleur extends Controller
 {
 	public function index($nom = 'user')
 	{
 		//La vue bonjour.blade.php est appelée, et la variabe $nom est associé à l'user
 		return view('bonjour', ['nom' => $nom]);
 	}
 } 