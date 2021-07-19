<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {

            $travel = new Travel();
            $travel->country = $faker->country();
            $travel->city = $faker->city();
            $travel->info = $faker->text();
            $travel->departure = $faker->dateTimeThisYear();
            $travel->night = $faker->numberBetween(1, 14);
            $travel->price = $faker->randomFloat(2, 400, 4000);
            $travel->poster = $faker->imageUrl(600, 450, 'vacancy', true, 'Viaggia con noi');
            $travel->save();
        }
    }
}
