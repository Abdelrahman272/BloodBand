<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            "facebook" => "https://www.facebook.com/",
            "Twitter" => "https://twitter.com/",
            "instagram" => "https://www.instagram.com/",
            "youtube" => "https://www.youtube.com/",
            "email" => "https://mail.google.com/",
            "phone"=> "123456789",
            "about_us" => "We Are The Best"
        ]);
    }
}
