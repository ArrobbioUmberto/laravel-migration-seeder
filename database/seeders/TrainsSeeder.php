<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $company = ['Trenitalia', 'Italo', 'Trenord'];
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->randomElement($company);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeBetween('-1 day', '0 day');
            $new_train->arrival_time = $faker->dateTimeBetween('0 day', '+1 day');
            $new_train->number_of_coaches = $faker->numberBetween(1, 10);
            $new_train->on_schedule = $faker->numberBetween(0, 1);
            $new_train->cancelled = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
