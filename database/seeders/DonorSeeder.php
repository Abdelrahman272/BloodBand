<?php

namespace Database\Seeders;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Donor;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Donor::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'd_o_b' => $faker->date(),
            'blood_type_id' => rand(1, BloodType::count()),
            'city_id' => rand(1, City::count()),
            'phone' => "123456789",
            'password' => bcrypt('secret'),
            'age' => $faker->numberBetween(18, 60),
            'address' => $faker->address,

        ]);
    }
}
