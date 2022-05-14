<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'content'=>$this->faker->text,
            'date_wirtten'=>now(),
            'user_id'=>$this->faker->numberBetween(1,50),
            'post_id'=>$this->faker->numberBetween(1,200),

        ];
    }
}
