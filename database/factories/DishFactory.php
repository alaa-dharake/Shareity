<?php

namespace Database\Factories;

use App\Models\Dish;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory
{
    protected $model = Dish::class;

    public function definition()
    {
        $user = User::where('role', $this->faker->randomElement(['admin', 'chef']))->inRandomOrder()->first();
        return [
            'name' => $this->faker->sentence(2),
            'price' => $this->faker->randomFloat(2, 5, 50),
            'quantity' => $this->faker->numberBetween(1, 20),
            'startTime' => $this->faker->time(),
            'day' => $this->faker->date(),
            'endTime' => $this->faker->time(),
            'category_id' => $this->faker->numberBetween(1, 10), // Assuming there are 10 categories
            'ingredients' => $this->faker->words(5),
            'image' => 'public\assets\images\meals\pizzaphoto.jpeg', // You can set a default image or use a placeholder
            'user_id' => $this->faker->numberBetween(1, 50),  // Assuming there are 50 users
        ];
    }
}
