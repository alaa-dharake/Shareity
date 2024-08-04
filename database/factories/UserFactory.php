<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lastName' => $this->faker->lastName,
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Default password is 'password'
            'is_admin' => false,
            'city_id' => $this->faker->numberBetween(1, 10), // Adjust based on your city data
            'state_id' => $this->faker->numberBetween(1, 5), // Adjust based on your state data
            'role' => $this->faker->randomElement(['admin', 'chef', 'user']),
            'image' =>'public\assets\images\user-1.jpg', // You can set a default image or use a placeholder
            'remember_token' => Str::random(10),
        ];
    }

    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'admin',
                'is_admin' => true,
            ];
        });
    }

    public function chef()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'chef',
            ];
        });
    }
}
