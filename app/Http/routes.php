<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*Route::group(['middleware' => ['web']], function () {
    //
});*/

//La méthode Http get est utilisée, la variable name est optionnelle, le controlleur 'MonControlleur' est utilisé, ainsi que sa fonction index
//Route::get('/{name?}', 'MonControlleur@index');

//except permet de définir les routes non importantes
Route::resource('PolygonalAnimalsCreators', 'PolygonalAnimalsCreatorControlleur', ['except' => ['create', 'edit']]);

Route::resource('PolygonalAnimals', 'PolygonalAnimalControlleur', ['only' => ['index']]);

Route::resource('PolygonalAnimalsCreators.PolygonalAnimals', 'CreatorOfPolygonalAnimalsControlleur', ['except' => ['edit', 'create']]);
