<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\PolygonalAnimalsCreator;

use Faker\Factory as Faker;

//Cette classe permet de remplir les champs indiqués de la table PolygonalAnimalsCreator de données au hasard
class PolygonalAnimalsCreatorSeed extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()

    {
        //6 entrées seront crées
        $faker = Faker::create();
        for($i = 0; $i < 6; $i++)

        {
            //Les colonnes name et phone vont être remplies
            PolygonalAnimalsCreator::create

            ([
                'name' => $faker->word(),
                'phone' => $faker->randomDigit(5)
            ]);

        }

    }

}
