<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarType>
 */
class CarTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function run()
    {
        $types = ['Sedan', 'Pickup', 'Convetible', 'Coupe', 'Camioneta'];

        foreach ($types as $typeName) {
            CarType:: factory()->create ([
                'name' => $typeName
            ]);
        }
    }
}
