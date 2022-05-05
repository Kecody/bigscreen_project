<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'answerer_access_token'=> $this->faker->md5(),
                'answers' => $this->faker->sentence(),
        ];
    }
}
