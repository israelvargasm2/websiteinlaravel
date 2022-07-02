<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new Image();
        $image->url = "posts/bootstrap-logo.svg";
        $image->description = "Bootstrap";
        $image->save();

        $image2 = new Image();
        $image2->url = "posts/css-logo.svg";
        $image2->description = "CSS";
        $image2->save();

        $image3 = new Image();
        $image3->url = "posts/html-logo.svg";
        $image3->description = "HTML5";
        $image3->save();

        $image4 = new Image();
        $image4->url = "posts/js-logo.svg";
        $image4->description = "JavaScript";
        $image4->save();

        $image5 = new Image();
        $image5->url = "posts/postgresql-logo.svg";
        $image5->description = "PostgreSQL";
        $image5->save();

        $image6 = new Image();
        $image6->url = "posts/php-logo.svg";
        $image6->description = "PHP";
        $image6->save();
    }
}
