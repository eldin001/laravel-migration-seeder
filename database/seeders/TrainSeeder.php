<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use App\Classes\TrainCodeGenerator; 

class TrainSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $fixedTrainCode = 'TRENO123';
        for ($i = 0; $i < 50; $i++) {
            $new_train = new Train();

            $new_train->company = $faker->company;
            $new_train->departure_station = $faker->city;
            $new_train->arrival_station = $faker->city;
            $new_train->departure_time = $faker->dateTimeBetween('-1 year', '+1 year');
            $new_train->arrival_time = $faker->dateTimeBetween('-1 year', '+1 year');

            $new_train->number_of_carriages = $faker->numberBetween(5, 15);
            $new_train->on_time = $faker->boolean;
            $new_train->cancelled = $faker->boolean(5);

            $new_train->save();
        }
    }
}
