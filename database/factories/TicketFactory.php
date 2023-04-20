<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'content' => $this->faker->sentence(10),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
        ];
    }
}
