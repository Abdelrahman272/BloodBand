<?php

namespace Database\Seeders;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Donar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DonarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('donar')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => '01064316964',
            'blood_type_id' => BloodType::all()->random()->id,
            'city_id' => City::all()->random()->id,
            'age' => rand(18,50),
            'address' => City::all()->random()->name,
            'd_o_b' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => Hash::make('password'),
        ]);
    }
}
