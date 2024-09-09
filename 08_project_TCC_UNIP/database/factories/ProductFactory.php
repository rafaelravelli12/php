<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductType;

class ProductFactory extends Factory
{
    public function definition()
    {
        $selectedElement = $this->faker->randomElement(['awp', 'm4a4', 'ak47']);
        $idNumber = rand(1, 100);
        $name = "{$selectedElement}_{$idNumber}";

        // // Seleciona um tipo de produto existente aleatoriamente
        // $productType = ProductType::inRandomOrder()->first();

        return [
            'name' => $name,
            'product_type_id' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
