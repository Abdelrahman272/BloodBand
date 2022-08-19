<?php

namespace Database\Seeders;

use App\Models\Governorate;
use Illuminate\Database\Seeder;

class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $governorates = [
            'الاسكندريه',
            'اسيوط',
            'الغربية',
        ];

        foreach ($governorates as $governorate) {
            Governorate::create([
                'name' => $governorate,
            ]);
        }
    }
}
