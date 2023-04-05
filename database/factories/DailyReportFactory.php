<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DailyReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // TODO: Ver como hacer para crear en un intervalo de tiempo, en plan del dia 1 al 5, etc.
        return [
            'content' => $this->faker->word,
            'created_at' => $this->faker->dateTimeThisMonth(), // No vale.
            'updated_at' => null
        ];
    }
}
