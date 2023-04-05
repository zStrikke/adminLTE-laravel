<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

class NotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $numClients = Client::all()->count();
        
        return [
            'content' => $this->faker->word,
            'client_id' => $this->faker->numberBetween(1, $numClients),
        ];
    }
}
