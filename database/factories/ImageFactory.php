<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {

        return [
            // 'url' => str_replace('public/storage/posts/', '', $this->faker->image('public/storage/posts', 640, 480, null, true)),
                'url' => str_replace("public/", '' ,$this->faker->image('public/storage/posts', 640, 480, null, true))
        ];
    }
}
