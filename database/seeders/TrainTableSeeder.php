<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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


        for ($i = 0; $i < 10; $i++) {
            $trains = Train::create([
                'Azienda' => $faker->company,
                'Stazione di partenza' => $faker->city,
                'Stazione di arrivo' => $faker->city,
                'Orario di partenza' => $faker->dateTimeBetween('-1 day', '+1 day'),
                'Orario di arrivo' => $faker->dateTimeBetween('-1 day', '+1 day'),
                'Codice Treno' => $faker->numberBetween(1000, 9999),
                'Numero Carrozze' => $faker->numberBetween(1, 10),
                'In orario' => $faker->boolean(),
                'Fuori orario' => $faker->boolean(),
                'Cancellato' => $faker->boolean(),
                'Confermato' => $faker->boolean(),
            ]);
            $trains->save();
        }
    }
}
