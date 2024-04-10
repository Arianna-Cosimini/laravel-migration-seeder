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
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->sentence();
            $newTrain->departure_station = $faker->words(3, true);
            $newTrain->arrival_station = $faker->words(3, true);
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->regexify('[A-Z0-9]{6}');
            $newTrain->carriages_number = $faker->numberBetween(1,20);
            $newTrain->on_time = $faker->boolean();
            $newTrain->canceled = $faker->boolean();


            $newTrain->save();
        }
    }
}
