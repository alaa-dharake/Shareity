<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Ensure you import the User model if needed
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 30 users with varying created_at dates this year
        $faker = \Faker\Factory::create();
        
        $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        
        for ($i = 0; $i < 30; $i++) {
            $randomMonth = $faker->randomElement($months);
            $createdAt = Carbon::createFromFormat('Y-m-d H:i:s', date('Y') . '-' . $randomMonth . '-' . $faker->numberBetween(1, 28) . ' 00:00:00');

            User::create([
                'name' => $faker->firstName,
                'lastName' => $faker->lastName,
                'username' => $faker->userName,
                'role' => $faker->randomElement(['user', 'chef']),
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'avatar' => 'public/assets/images/user-1.jpg',
                'active_status' => true,
                'dark_mode' => false,
                'messenger_color' => $faker->hexColor,
                'city_id' => $faker->numberBetween(1, 30),
                'state_id' => $faker->numberBetween(1, 8),
                'created_at' => $createdAt,
            ]);
        }

    }
}
