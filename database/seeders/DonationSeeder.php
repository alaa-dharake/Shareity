<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;

class DonationSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get all users
        $users = User::all();

        // Specific campaign IDs to assign
        $campaignIds = [12, 36, 37, 39, 40];

        $donations = [];

        // Generate 20 donations
        for ($i = 0; $i < 20; $i++) {
            $donations[] = [
                'author_id' => $users->random()->id,
                'campaign_id' => $campaignIds[array_rand($campaignIds)],
                'donation_amount' => $faker->randomFloat(2, 10, 1000),
                'transaction_id' => $faker->uuid,
                'status' => 0,
                'created_at' => Carbon::now()->subDays($faker->numberBetween(1, 30)), // Random date within the last 30 days
                'updated_at' => Carbon::now(),
            ];
        }

        // Insert donations into the database
        DB::table('donations')->insert($donations);
    }
}
