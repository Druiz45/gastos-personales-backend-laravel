<?php

namespace Database\Factories;

use App\Models\DocumentType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'document_type_id' => DocumentType::query()
                ->inRandomOrder()
                ->firstOrFail()
                ->id,

            'document' => fake()->unique()->numerify('##########'),

            'first_name' => fake()->firstName(),

            'middle_name' => fake()->optional()->firstName(),

            'first_surname' => fake()->lastName(),

            'second_surname' => fake()->optional()->lastName(),

            'email' => fake()->unique()->safeEmail(),

            'phone' => fake()->unique()->numerify('3#########'),

            'email_verified_at' => now(),

            'password' => static::$password ??= Hash::make('password'),

            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
