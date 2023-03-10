<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\user;


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
            'user_id'=>user::inRandomOrder()->first()->id,
            'created_at'=>fake()->dateTime(),
            'updated_at'=>fake()->dateTime(),
            'description'=>fake()->company()

        ];
    }
}
