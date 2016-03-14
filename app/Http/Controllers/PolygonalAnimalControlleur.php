<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PolygonalAnimal;

class PolygonalAnimalControlleur extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return 'Je suis sur l\'index';

		$Animals = PolygonalAnimal::all();

		return response()->json(['data' => $Animals], 200);

	}
}
