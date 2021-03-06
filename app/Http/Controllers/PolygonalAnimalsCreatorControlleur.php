<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\PolygonalAnimalsCreator;

use App\Http\Requests\CreateCreatorRequest;

class PolygonalAnimalsCreatorControlleur extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	//Cette fonction permet de lister les entrées avec leurs colonnes de la table PolygonalAnimalsCreator
	public function index()
	{
		//return 'Vous êtes sur l\'index!';
		
		//Cela permet de renvoyer toutes les entrées de la table PolygonalAnimalsCreator et de les placer dans la variable $Creators
		$Creators = PolygonalAnimalsCreator::all();

		//La méthode json de l'objet response permet de convertir les données en JSON, le deuxième paramètre renvoie un code d'erreur
		//data permet d'afficher un tableau de données json
		return response()->json(['data' => $Creators], 200);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	//Cette fonction permet de créer des entrées
	public function store(CreateCreatorRequest $requete)
	{
		
		$valeurs = $requete->only(['name', 'phone']);

		PolygonalAnimalsCreator::create($valeurs);

		return response()->json(['message' => "Creator correctement ajoute"], 201);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	//Cette fonction permet d'afficher une entrée spécifiée
	public function show($id)
	{
		$Creator = PolygonalAnimalsCreator::find($id);
		if(!$Creator)
		{
			return response()->json(['message' => 'Ce creator n\'existe pas', 'code' => 404], 404);
		}
		return response()->json(['data' => $Creator], 200);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	//Cette fonction permet de mettre à jour une entrée spécifiée
	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	//Cette fonction permet de détuire une entrée spécifiée
	public function destroy($id)
	{
		//
	}
}
