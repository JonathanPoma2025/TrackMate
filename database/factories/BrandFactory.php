<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function run(): array
    {
        $brands = ['Toyota','Honda', 'Ford', 'Chevrolet', 'Nissan'];

        foreach ($brands as $brandName) {
            Brand::factory ()->create([
                'name' => $brandName]);
        }
    }
}
