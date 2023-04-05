<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PredefinedAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(2, true),
            'content' => $this->faker->paragraph
        ];
    }
}
