<?php

namespace Database\Seeders;
use app\Models\Eleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElevesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // Create 50 students records 
        for ($i = 0; $i < 10; $i++) {
            Eleve::create([
                'Matricule' => $faker->sentence(3),
                'Prénom'=>$faker->firstName,               
                'Nom' => $faker->lastName,
                'Email' => $faker->email,
                'Adress' => $faker->address,
                'Sexe'=> $faker->randomElement(['male', 'female']),
                'date_naissance'=> $faker->dateTimeBetween($startDate = '-13 years', $endDate = 'now')->format('Y-m-d')

            ]);
        }
    }
}
