<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Especialidad>
 */
class EspecialidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $especialidad = [
            'Cardiología',
            'Dermatología',
            'Gastroenterología',
            'Neurología',
            'Oftalmología',
            'Oncología',
            'Pediatría',
            'Endocrinología',
            'Traumatología',
            'Psiquiatría',
            'especialidad 11',
            'especialidad 12',
        ];
        
        return [
            'nombre' => fake()->randomElement($especialidad),
            'color' => fake()->hexColor(),
        ];
    }
}
