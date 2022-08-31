<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GovernorateSeeder::class,
            CitySeeder::class,
            BlogSeeder::class,
            SettingSeeder::class,
            BloodTypeSeeder::class,
            DonorSeeder::class,
        ]);
    }
}
