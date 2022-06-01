<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConocimientosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cursos' => $this->faker->text(),

        ];
    }
}
