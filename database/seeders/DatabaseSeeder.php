<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Mascota;
use App\Models\Telefono;
use App\Models\User;
use App\Models\Persona;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Persona::factory(50)->create();
        Cliente::factory(50)->create();
        Mascota::factory(50)->create();
        Telefono::factory(50)->create();
    }
}
