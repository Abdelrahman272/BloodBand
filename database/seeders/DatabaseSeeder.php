<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Donar;
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
        // \App\Models\User::factory(10)->create();
        // Donar::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     BloodType::class,
        //     PostSeeder::class,
        //     CommentSeeder::class,
        // ]);

        $this->call([
            BloodTypeSeeder::class,
            DonarSeeder::class,
        ]);
    }
}
