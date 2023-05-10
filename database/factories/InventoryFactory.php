<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'item_id' => $this->faker->randomDigit(),
            'daily_roster_id' => $this->faker->randomDigit(),

            'opening_quantity' => $this->faker->randomDigit(),
            'closing_quantity' => $this->faker->randomDigit(),
            'current_quantity' => $this->faker->randomDigit(),
            'comment' => $this->faker->text()
        ];
    }
}
