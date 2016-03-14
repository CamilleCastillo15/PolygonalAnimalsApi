<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use App\Maker;
use App\PolygonalAnimalsCreator;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()

	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		PolygonalAnimalsCreator::truncate();
		Model::unguard();
		
		//La classe appelle deux autres classes qui seront exécutés quand la commande php artisan db:seed sera lancée
		$this->call('PolygonalAnimalsCreatorSeed');
		$this->call('PolygonalAnimalSeed');
	}

}