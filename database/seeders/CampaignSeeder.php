<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    public function run()
    {
        $userIds = [1, 2];

        $campaignNames = [
            'Feed the Hungry',
            'Help the Homeless',
            'Community Kitchen',
            'Meals on Wheels',
            'Charity Dinner'
        ];

        $locations = [
            'Beirut',
            'Tripoli',
            'Sidon',
            'Byblos',
            'Baalbek'
        ];

        $mealNames = [
            'Lebanese Mezze',
            'Falafel Sandwich',
            'Grilled Chicken Tawook',
            'Kibbeh',
            'Tabbouleh Salad'
        ];

        $descriptions = [
            'Providing meals to the needy in the community.',
            'Helping homeless individuals with nutritious food.',
            'Serving hot meals to the community members.',
            'Delivering meals to those who can’t leave their homes.',
            'Hosting a dinner event to raise funds for charity.'
        ];

        foreach ($userIds as $userId) {
            foreach ($campaignNames as $campaignName) {
                for ($i = 0; $i < 2; $i++) { // Create 2 campaigns for each user-campaign combination
                    Campaign::create([
                        'campaign_name' => $campaignName . ' ' . ($i + 1),
                        'donated_amount' => 0,
                        'number_of_meals' => 0,
                        'price_per_meal' => rand(5, 20) + 0.99 * rand(1, 99), // Random price with decimals
                        'description' => $descriptions[array_rand($descriptions)],
                        'image' => 'depositphotos_408613250-stock-illustration-food-and-grocery-donation-concept.jpg',
                        'start_time' => '12:00:00',
                        'end_time' => '14:00:00',
                        'location' => $locations[array_rand($locations)],
                        'meal_name' => $mealNames[array_rand($mealNames)],
                        'author_id' => $userId,
                        'author' => 'Author ' . $userId, // Placeholder author name
                        'end_date' => now()->addDays(rand(1, 30)),
                    ]);
                }
            }
        }
    }
}
