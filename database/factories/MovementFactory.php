<?php

namespace Database\Factories;

use App\Models\CategoryMovement;
use App\Models\Movement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Movement>
 */
class MovementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_movement_id' => $this->faker->randomElement([1, 2]),

            'category_movement_id' => CategoryMovement::query()
                ->whereNull('user_id')
                ->where('is_active', true)
                ->inRandomOrder()
                ->firstOrFail()
                ->id,

            'amount' => $this->faker->randomFloat(2, 1000, 5000000),

            'description' => $this->faker->optional()->sentence(),

            'transaction_date' => $this->faker
                ->dateTimeBetween('-1 year', 'now')
                ->format('Y-m-d'),
        ];
    }

    public function income(): static
    {
        return $this->state(fn(array $attributes) => [
            'type_movement_id' => 1,
        ]);
    }

    public function expense(): static
    {
        return $this->state(fn(array $attributes) => [
            'type_movement_id' => 2,
        ]);
    }
}
