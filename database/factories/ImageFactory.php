<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imageable_type = $this->faker->boolean ? Post::class : Page::class;

        return [
            'imageable_type' => $imageable_type,
            'imageable_id' => (new $imageable_type)::all()->random()->id,
            'url'     => $this->faker->imageUrl(),
        ];
    }
}
