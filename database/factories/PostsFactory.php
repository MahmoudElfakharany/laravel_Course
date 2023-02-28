<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\author;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=>fake()->name(),
            'postedBy'=>author::inRandomOrder()->first()->id,
            'created_at'=>fake()->dateTime(),
            'description'=>fake()->company()

        ];
    }
}
