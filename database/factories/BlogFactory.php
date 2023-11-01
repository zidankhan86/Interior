<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'thumbnail' => $this->faker->imageUrl(640, 480),
            'post_image' => $this->faker->imageUrl(800, 600),
            'description' => $this->faker->paragraph,
            'post_description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement([0, 1]),
            'featured' => $this->faker->randomElement([0, 1]),
            'hashtags' => $this->faker->words(3, true),
            'user_id' => \App\Models\User::factory(),
            'category_id' => \App\Models\Category::factory(),
        ];
    }
}
