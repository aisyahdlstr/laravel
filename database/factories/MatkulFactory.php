<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatkulFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_matkul' => $this->faker->name(),
            'semester' => $this->faker->randomNumber(1, true),
            'sks' => $this->faker->randomNumber(1, true),

        ];
    }
}
