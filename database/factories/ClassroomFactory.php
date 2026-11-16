<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => fake()->unique()->randomElement(['XI PPLG 1', 'XI PPLG 2', 'XI PPLG 3', 'XI DKV 1', 'XI DKV 2', 'XI DKV 3', 'XI DKV 4', 'XI DKV 5', 'XI TKJ 1', 'XI TKJ 2', 'XI TKJ 3']),
           'major' => fake()->randomElement(['PPLG', 'DKV', 'TKJ']),
        ];
    }
}
