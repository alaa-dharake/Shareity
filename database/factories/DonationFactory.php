<?php

namespace Database\Factories;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    protected $model = Donation::class;

    public function definition()
    {
        return [
            'author_id' => $this->faker->numberBetween(1, 50), // Non-admin users (IDs 2-50)
            'campaign_id' => $this->faker->numberBetween(1, 20), // Assuming there are 20 campaigns
            'donation_amount' => $this->faker->randomFloat(2, 10, 1000),
            'transaction_id' => $this->faker->uuid,
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
        ];
    }
}
