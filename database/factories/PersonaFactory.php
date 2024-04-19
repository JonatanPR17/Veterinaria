<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
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
            'apellido_paterno'=>$this->faker->text(100),
            'apellido_materno'=>$this->faker->text(100),
            'fecha_nacimiento'=>$this->faker->date(),
            'direccion'=>$this->faker->optional()->text(255),
            'usuario'=>$this->faker->text(100),
            'contraseña'=>$this->faker->text(50),
            'categoria_persona'=>$this->faker->randomElement(['cliente','empleado']),
        ];
    }
}
