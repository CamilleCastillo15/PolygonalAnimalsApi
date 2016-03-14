<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\PolygonalAnimal;

use Faker\Factory as Faker;

//La classe Seeder permet de générer des données automatiques pour des lignes de notre table

class PolygonalAnimalSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    
    {
        //La variable $faker permet d'appeler des méthodes qui vont générer des données aléatoires
        $faker = Faker::create();

        //10 entrée vont être crées
        for($i = 0; $i < 10; $i++)

        {
            PolygonalAnimal::create

            ([
                'color' => $faker->safeColorName(),
                'price' => $faker->randomFloat(),
                'creator_id' => $faker->numberBetween(1,5)
            ]);

        }

    }

}