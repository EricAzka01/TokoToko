<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buyer>
 */
class BuyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstName = fake()->firstName();
        $lastName = fake()->lastName();

        $fullName = $firstName . ' ' . $lastName;
        $emailAddress = strtolower($fullName) . '@gmail.com';

        return [
            "b_name" => $fullName,
            "b_email" => $emailAddress,
            "b_phoneno" => fake()->phoneNumber(),
            "b_address" => fake()->address(),
            "password" => password_hash('123123', PASSWORD_DEFAULT),
        ];
    }
}