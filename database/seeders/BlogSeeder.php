<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            "title"=> 'News',
            "description" => "ererfbbae",
            "image" => "https://www.google.com/imgres?imgurl=https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg&imgrefurl=https://pixabay.com/images/search/nature/&tbnid=DH7p1w2o_fIU8M&vet=1&docid=Ba_eiczVaD9-zM&w=771&h=480&source=sh/x/im",
            "status" => "active"
    ]);
    }
}
