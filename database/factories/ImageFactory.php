<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Image::class;

    public function definition()
    {
        return [
            // 'url' => 'img/' . $this->faker->image('public/storage/posts', 640, 480, null, false)
            'url' => "post/bootstrap-logo.svg",
            'description' => "post/css-logo.svg"
        ];
    }
}
