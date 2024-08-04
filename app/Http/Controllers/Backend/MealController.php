<?php

namespace App\Http\Controllers\Backend;

use App\Models\Dish;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MealController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_or_chef');
    }

    public function meal_index()
    {
        $user = Auth::user();
        $dishes = Dish::all();

        if ($user->isAdmin()) {
            return view('admin.dishes.index', ['dishes' => $dishes, 'user' => $user]);
        } elseif ($user->isChef()) {
            return view('chef.dishes.index', ['dishes' => $dishes, 'user' => $user]);
        }

        return abort(403, 'Unauthorized action.');
    }


    public function create()
    {
        $user = Auth::user();
        $categories = Category::all();
        $dishes = Dish::all(); 

        if ($user->isAdmin()) {
            return view('admin.dishes.create', ['categories' => $categories, 'dishes' => $dishes]);
        } elseif ($user->isChef()) {
            return view('chef.dishes.create', ['categories' => $categories]);
        }

        return abort(403, 'Unauthorized action.');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'ingredients' => 'required|array',
            'ingredients.*' => 'required|string',
            'startTime' => 'required|date_format:H:i',
            'endTime' => 'required|date_format:H:i|after:startTime',
            'day' => 'required|date|after_or_equal:today',
            'quantity' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        Log::info('Store method called with request data:', $request->all());
    
        try {
            $user = Auth::user();
            $dish = new Dish;
            $dish->name = $request->name;
            $dish->price = $request->price;
            $dish->ingredients = $request->input('ingredients');
            $dish->startTime = $request->startTime;
            $dish->endTime = $request->endTime;
            $dish->day = $request->day;
            $dish->quantity = $request->quantity;
            $dish->category_id = $request->category_id;
    
            // Additional logic to determine availability based on date and time
            $available = true;
            if (Carbon::parse($request->day)->isPast() || Carbon::parse($request->endTime) <= now()) {
                $available = false;
            }
            
    
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/storage'), $imageName);
                $dish->image = $imageName;
            }
    
            $dish->user_id = $user->id;
            $dish->save();
    
            // Redirect based on user role
            if ($user->isAdmin()) {
                return redirect()->route('meals.index')->with('success', 'Dish created successfully.');
            } elseif ($user->isChef()) {
                return redirect()->route('meals.index')->with('success', 'Dish created successfully.');
            }
        } catch (\Exception $e) {
            Log::error('Error storing dish: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error creating dish: ' . $e->getMessage());
        }
    }
    public function update(Request $request, Dish $dish)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'ingredients' => 'required|array',
        'ingredients.*' => 'required|string',
        'startTime' => [
            'required',
            'date_format:H:i',
        ],
        'endTime' => [
            'required',
            'date_format:H:i',
            'after:startTime',
        ],
        'day' => [
            'required',
            'date',
            'after_or_equal:today',
        ],
        'quantity' => 'required|integer',
        'category_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    try {
        $dish->name = $request->name;
        $dish->price = $request->price;
        $dish->ingredients = $request->input('ingredients');
        $dish->startTime = $request->startTime;
        $dish->endTime = $request->endTime;
        $dish->day = $request->day;
        $dish->quantity = $request->quantity;
        $dish->category_id = $request->category_id;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/storage'), $imageName);
            $dish->image = $imageName;
        }

        $dish->save();

        $user = Auth::user();
        if ($user->isAdmin() || $user->isChef()) {
            return redirect()->route('meals.index')->with('success', 'Dish updated successfully.');
        }
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error updating dish: ' . $e->getMessage());
    }
}

    public function edit($id)
    {
        $dish = Dish::findOrFail($id);
        $categories = Category::all();
        $user = Auth::user();

        if ($user->isAdmin()) {
            return view('admin.dishes.edit', compact('dish', 'categories'));
        } elseif ($user->isChef()) {
            return view('chef.dishes.edit', compact('dish', 'categories'));
        }

        return abort(403, 'Unauthorized action.');
    }

    public function destroy(Dish $dish)
    {
        $user = Auth::user();
        if ($dish && file_exists(public_path('storage/' . $dish->image))) {
            unlink(public_path('storage/' . $dish->image));
        }
        $dish->delete();

        if ($user->isAdmin()) {
            return redirect()->route('meals.index')->with('success', 'Dish deleted successfully.');
        } elseif ($user->isChef()) {
            return redirect()->route('meals.index')->with('success', 'Dish deleted successfully.');
        }
    }

    public function myDishes()
    {
        $user = Auth::user();
        $dishes = $user ? Dish::where('user_id', $user->id)->get() : collect();

        if ($user->isAdmin()) {
            return view('admin.dishes.index', ['dishes' => $dishes]);
        } elseif ($user->isChef()) {
            return view('chef.dishes.index', ['dishes' => $dishes]);
        }

        return abort(403, 'Unauthorized action.');
    }
}
