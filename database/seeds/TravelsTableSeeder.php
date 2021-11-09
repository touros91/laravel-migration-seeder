<?php

use Illuminate\Database\Seeder;

use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++ ) {
            $newTravel = new Travel();
            $newTravel->code = $faker->ean13();
            $newTravel->destination = $faker->city();
            $newTravel->price = $faker->randomFloat(2, 99, 3000);
            $newTravel->days = $faker->numberBetween(2, 21);
            $newTravel->start_date = $faker->dateTime();
            $newTravel->end_date = $faker->dateTime();
            $newTravel->departure_airport = $faker->city();
            $newTravel->arrival_airport = $faker->city();
            $newTravel->accomodation_type = "Hotel";
            $newTravel->accomodation_name = $faker->company();
            $newTravel->accomodation_address = $faker->streetAddress();
            $newTravel->description = $faker->text();
            $newTravel->save();
        }
    }
}
