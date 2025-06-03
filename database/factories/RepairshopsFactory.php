<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Repairshops>
 */
class RepairshopsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->fake()->company(),
            'address' => $this->fake()->address(),
            'email' => $this->fake()->unique()->safeEmail(),
            'phone' => $this->fake()->phoneNumber(),
        ];
    }
    /*public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }*/
}
