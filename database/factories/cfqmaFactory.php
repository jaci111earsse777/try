<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class cfqmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registration_number' => $this-> fake()->randomDigit(),
            'fullname' => $this()->faker()->name(),
            'dapart' => $this()->faker()->word(),
            'hire_date' => $this()->faker()->date(),
            'phone' => $this()->faker()->phoneNumber(),
            'address' => $this()->faker()->address(),
            'city' => $this()->faker()->city(),

        ];
    }
}
