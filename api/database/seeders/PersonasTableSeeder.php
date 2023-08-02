<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::truncate();

       $faker = \Faker\Factory::create();

       for ($i = 0; $i < 50; $i++) {
           Persona::create([
               'name' => $faker->name,
               'email' => $faker->email,
               'phone' => $faker->phoneNumber,
           ]);
       }
    }
}
