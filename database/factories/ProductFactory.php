<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->randomFloat(2, 10, 100);
        $iva = $price * 0.15;
        $total = $price + $iva; 

        return [
            'nombre'=>$this->faker->word,
            'descripcion'=>$this->faker->sentence,
            'precio'=>$price,
            'iva'=>$iva,
            'total'=>$total,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
