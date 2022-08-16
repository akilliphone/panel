<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

class UserFactory extends Factory
{

    use DatabaseMigrations;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numberBetween(1, 100),
            'name' => 'hello',
            'firstname' => "hello2",
            'lastname' => "hello3",
            'tc_kimlik' => $this->faker->unique()->numberBetween(1, 100),
            'email' => "hello1@hello2.com",
            'gsm' => $this->faker->unique()->numberBetween(1, 100),
            'telephone' => $this->faker->unique()->numberBetween(1, 100),
            'user_type_id' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->numberBetween(1, 100),
            'last_ip' => "192.168.12.13",
            'language_id' => $this->faker->numberBetween(1, 100),
            'api_key' => $this->faker->unique()->numberBetween(1, 100),
            'secret_key' => $this->faker->unique()->numberBetween(1, 100),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
