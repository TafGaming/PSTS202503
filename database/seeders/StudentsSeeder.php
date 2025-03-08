<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        
        for ($i = 1; $i <= 100; $i++) {
            Students::create([
                'name' => $faker->name,
                'gender' => $faker->randomElement(['male', 'female']),
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'grade' => $faker->randomElement(['XIU1', 'XIU2', 'XIU3', 'XIU4', 'XIU5', 'XIU6', 'XIU7', 'XIU8', 'XIU9', 'XIU10', 'XIU11']),

            ]);
        }
        //thoriq XIU3
     
    }
}
