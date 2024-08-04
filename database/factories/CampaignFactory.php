<?php

namespace Database\Factories;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignFactory extends Factory
{
    protected $model = Campaign::class;

    public function definition()
    {
        // Get a random user with 'admin', 'chef', or 'user' role
        $user = User::where('role', $this->faker->randomElement(['admin', 'chef']))->inRandomOrder()->first();

        return [
            'campaign_name' => $this->faker->sentence(3),
            'donated_amount' => $this->faker->randomFloat(2, 100, 5000),
            'number_of_meals' => $this->faker->numberBetween(10, 500),
            'price_per_meal' => $this->faker->randomFloat(2, 5, 50),
            'author' => $this->faker->name,
            'author_id' => $this->faker->numberBetween(1, 50), 
            'description' => $this->faker->paragraph,
            'image' => 'public\Donations\Donations\img\about.jpg', // You can set a default image or use a placeholder
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'completed_at' => null,
            'meal_name' => $this->faker->word,
            'ingredients' => $this->faker->words(5),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'location' => $this->faker->address,
        ];
    }
}
