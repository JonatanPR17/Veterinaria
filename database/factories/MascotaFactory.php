<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
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
            'nombre'=>$this->faker->text(100),
            'fecha_nacimiento'=>$this->faker->date(),
            'raza'=>$this->faker->text(100),
            'peso'=>$this->faker->randomFloat(2,14,100)
        ];
    }
}
