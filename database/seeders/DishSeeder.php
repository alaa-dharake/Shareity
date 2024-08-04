<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    public function run()
    {
        $userIds = [1, 2];
        $categories = Category::whereIn('name', ['Pizza', 'Burger', 'Meat', 'Chicken', 'Pasta'])->get();

        // Logical names for each category
        $logicalNames = [
            'Pizza' => ['Margherita', 'Pepperoni', 'Quattro Formaggi', 'Vegetarian'],
            'Burger' => ['Cheeseburger', 'Bacon Burger', 'Veggie Burger', 'Mushroom Swiss Burger'],
            'Meat' => ['Steak', 'Roast Beef', 'Ribs', 'Filet Mignon'],
            'Chicken' => ['Grilled Chicken', 'Chicken Parmesan', 'Chicken Alfredo', 'Teriyaki Chicken'],
            'Pasta' => ['Spaghetti Carbonara', 'Penne Arrabbiata', 'Lasagna', 'Fettuccine Alfredo']
        ];

        foreach ($categories as $category) {
            $names = $logicalNames[$category->name];
            $nameCount = count($names);

            foreach ($userIds as $userId) {
                for ($i = 0; $i < 2; $i++) { // Create 2 dishes for each category-user combination
                    Dish::create([
                        'name' => $names[$i % $nameCount] . ' ' . $category->name,
                        'price' => rand(10, 30) + 0.99 * rand(1, 99), // Random price with decimals
                        'ingredients' => json_encode(['Ingredient 1', 'Ingredient 2']),
                        'startTime' => '12:00:00',
                        'endTime' => '14:00:00',
                        'day' => '2024-06-26',
                        'quantity' => rand(5, 20),
                        'category_id' => $category->id,
                        'user_id' => $userId,
                        'image' => null,
                    ]);
                }
            }
        }
    }
}
