<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model=Post::class;

    public function definition(): array
    {
        return [
         'title' => fake()->sentence(),
        'author' => fake()->randomNumber(),
        'content' => fake()->paragraph(),
        'status' => fake()->randomElement(['published', 'draft']),
        ];
    }
}
