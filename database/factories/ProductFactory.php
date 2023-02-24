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
        return [

            'product_name' => $this->faker->name(),

            'price'        => $this->faker->numberBetween($min = 5, $max = 150),
            'number_of'    => $this->faker->numberBetween($min = 9, $max = 999),

            // 'sku'          => $this->faker->shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),
            // 'mpn'          => $this->faker->shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"),

            // 'type'         => $this->faker->shuffle(array("type_1", "type_2", "type_3")),
            // 'quantity'     => $this->faker->shuffle(array('PCS', 'PCK', 'CTN'         )),

            // 'created_at'   => now()->toDateTimeString(),
            // 'updated_at'   => now()->toDateTimeString(),


        ];
    }
}
