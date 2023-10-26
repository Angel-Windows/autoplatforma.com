<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = Category::inRandomOrder()->first();
        return [
            'user_id' => 1,
            'category_id' => $category,
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'short_description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'reading_time' => $this->faker->numberBetween(5, 30),
            'published_at' => $this->faker->dateTimeThisYear,
        ];
    }
}

