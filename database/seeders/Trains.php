<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class Trains extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $newTrain = new Train();
        $newTrain -> company= $faker->words();
        $newTrain -> departure_station= $faker->words(3, true);
        $newTrain -> arrival_station= $faker->words(3, true);
        $newTrain -> departure_time= $faker->time();
        $newTrain -> arrival_time= $faker->time();
        $newTrain -> train_code= $faker ->lexify();
        $newTrain -> on_time= $faker->boolean();
        $newTrain -> canceled= $faker->boolean();



    }
}
