<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Governorate;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'الدقهليه',
            'الجيزة',
            'الشرقية',
            'الغربية',
            'الفيوم',
            'القاهرة',
            'الدقهليه',
            'الجيزة',
            'الشرقية',
            'الغربية',
            'الفيوم',
            'القاهرة',
            'الدقهليه',
            'الجيزة',
            'الشرقية',
            'الغربية',
            'الفيوم',
            'القاهرة',
            'الدقهليه',
            'الجيزة',
            'الشرقية',
            'الغربية',
            'الفيوم',
            'القاهرة',
            'الدقهليه',
            'الجيزة',
            'الشرقية',
            'الغربية',
            'الفيوم',
            'القاهرة',
            'الدقهليه',
            'الجيزة',
            'الشرقية',
            'الغربية',
            'الفيوم',
            'القاهرة',
            'الدقهليه',
            'الجيزة',
            'الشرقية',
            'الغربية',
            'الفيوم',
            'القاهرة',
            'الدقهليه',
            'الجيزة',
            'الشرقية',
            'الغربية',
            'الفيوم',
            'القاهرة',
        ];

        foreach ($cities as $city) {
            City::create([
                'name' => $city,
                'governorate_id' => rand(1, Governorate::count()),
            ]);
        }
    }
}
