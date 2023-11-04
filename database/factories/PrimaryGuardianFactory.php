<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrimaryGuardian>
 */
class PrimaryGuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "contact_number" => fake()->phoneNumber(),
            "relationship" => fake()->randomElement(['father', 'mother', 'uncle', 'aunt', 'grandfather', 'grandmother']),
            "address" => fake()->address(),
           // "student_id" => User::inRandomOrder()->first()->id, 
            //"student_id" => fake()->unique()->numberBetween(1, User::count()), 
        
        ];
    }
}
