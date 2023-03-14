<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Model
use App\Models\Train;
// Faker
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $new_train= new Train();
            $new_train->company = $faker->randomElement(['TrenItalia','Italo']);
            $new_train->code = $faker->unique()->regexify('[A-Z]{2}[0-9]{3}');
            $new_train->departure_time = $faker->city();
            $new_train->arrival_time = $faker->city();
            $new_train->departure_station = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->arrival_station = $faker->dateTimeBetween('+1 week', '-1 week');
            $new_train->carriages = $faker->numberBetween(5,10);
            $new_train->in_orario = $faker->optional($weight = 40, $default=true)->boolean();
            $new_train->cancellato = $faker->optional($weight = 10, $default=false)->boolean();
            $new_train->save();
        }
    }
}
