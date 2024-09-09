<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductTypeFactory extends Factory
{
    public function definition()
    {
        $randomFloat = $this->faker->randomFloat(4, 0.0001, 1.0000);        
        $productTypeName = $this->getProductTypeByFloat($randomFloat);

        return [
            'random_value' =>  $randomFloat,
            'product_type_name' => $productTypeName,
            'product_type_uuid' => (string) Str::uuid(),
            'description' => $this->faker->text(200),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    private function getProductTypeByFloat($floatValue)
    {
        if ($floatValue <= 0.0150) {
            return 'Factory New';
        } elseif ($floatValue <= 0.0300) {
            return 'Minimal Wear';
        } elseif ($floatValue <= 0.1000) {
            return 'Field-Tested';
        } elseif ($floatValue <= 0.5000) {
            return 'Well-Worn';
        } else {
            return 'Battle-Scarred';
        }
    }
}
