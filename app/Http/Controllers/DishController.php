<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dish;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\DishSimilarity;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }

    public function index(Request $request)
    {
        $sort = $request->query('sort', 'alphabatical');
        Log::info('Sort option selected: ' . $sort); // Log the selected sort option
    
    
        $categories = Category::all();
        $sort = $request->query('sort', 'newest');
        $user = Auth::user();
    
        // Fetch maximum price from dishes
        $maxPrice = Dish::max('price');
    
        // Default price range values
        $minPrice = $request->query('min_price', 0);
        $maxPriceFilter = $request->query('max_price', $maxPrice);
    
        // Fetch dishes based on the price range
        $dishesQuery = Dish::whereBetween('price', [$minPrice, $maxPriceFilter]);
    
        // Handle sorting
        if ($sort === 'newest') {
            $dishesQuery->orderBy('created_at', 'desc'); // Sort by created_at descending (newest first)
        } elseif ($sort === 'alphabetical') {
            $dishesQuery->orderBy('name','asc'); // Sort by name ascending
        } elseif ($sort === 'lowest_price') {
            $dishesQuery->orderBy('price'); // Sort by price ascending (lowest first)
        } elseif ($sort === 'highest_price') {
            $dishesQuery->orderBy('price', 'desc'); // Sort by price descending (highest first)
        }
    
        $dishes = $dishesQuery->get();
    
        if ($request->ajax()) {
            return view('dishes.dishes', compact('dishes'));
        }
    
        return view('dishes.index', compact('dishes', 'categories', 'user', 'minPrice', 'maxPriceFilter','maxPrice'));
    }
    
    
    public function show(Dish $dish)
    {
        // Fetch all dishes from the database
        $dishes = Dish::all();
        
        // Ensure you have the user associated with the dish
        $chef = $dish->user;
        $currentDate = Carbon::now(); // Get the current date/time
        $currentTime = Carbon::now()->format('H:i:s');
    
        // Convert the collection of dishes to an array with ingredients properly handled
        $dishesArray = $dishes->map(function ($dish) {
            // Ensure the ingredients field is a string before decoding
            $ingredients = is_string($dish->ingredients) ? json_decode($dish->ingredients, true) : $dish->ingredients;
    
            // Add error handling for json_decode
            if (json_last_error() !== JSON_ERROR_NONE) {
                $ingredients = []; // Default to an empty array or handle the error as needed
            }
    
            return (object)[
                'id' => $dish->id,
                'name' => $dish->name,
                'image' => $dish->image, // Ensure image is included
                'ingredients' => $ingredients,
                'price' => $dish->price, // Add the price attribute here
                'chef'=>$dish->user,
                'quantity' => $dish->quantity,
                'day' => $dish->day,
                'endTime' => $dish->endTime,
            ];
        })->toArray();
    
        // Create a new instance of DishSimilarity
        $dishSimilarity = new DishSimilarity($dishesArray);
    
        // Calculate the similarity matrix
        $similarityMatrix = $dishSimilarity->calculateSimilarityMatrix();
    
        // Get dishes sorted by similarity
        $similarDishes = $dishSimilarity->getDishesSortedBySimilarity($dish->id, $similarityMatrix);
    
        // Return the view with the dish, similar dishes, and chef
        return view('dishes.show', compact('dish', 'similarDishes', 'chef', 'currentDate', 'currentTime'));
    }
    

    public function cart()
    {
        $user = Auth::user();
        $dish = Dish::all();
        return view('user.cart', compact('user', 'dish'));
    }

    public function addToCart($id)
    {
        $dish = Dish::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $dish->name,
                "description" => $dish->description,
                "price" => $dish->price,
                "quantity" => 1,
                "startTime" => $dish->startTime,
                "endTime" => $dish->endTime,
                "day" => $dish->day,
                "image" => $dish->image,
                "category_id" => $dish->category_id,
                "user_id" => $dish->user_id,
                "ingredients" => $dish->ingredients,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        // Validate the request
        $request->validate([
            'id' => 'required|exists:dishes,id',
            'quantity' => 'required|integer|min:1',
        ]);
    
        // Retrieve the cart from the session
        $cart = session()->get('cart');
    
        // Check if the dish exists in the cart
        if (!isset($cart[$request->id])) {
            session()->flash('error', 'Dish not found in the cart!');
            return redirect()->back();
        }
    
        // Update the quantity in the cart
        $cart[$request->id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);
        session()->flash('success', 'Cart successfully updated!');
    
        return redirect()->back();
    }
    

    
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}
