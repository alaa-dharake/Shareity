<?php

namespace App\Http\Controllers\Backend;

use App\Models\Dish;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin')->except('viewCategory');
    }
    public function index()
    {
        $categories = Category::paginate(10);
        return view('categories.index', ['categories' => $categories]);
    }
    // public function show(Category $category): View
    // {
    //     return view('categories.show')->with('category', $category);
    // }
    

    //Create form
    public function create(){
        return view('categories.create');
    }




public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

   
    $category = new Category();
    $category->name = $validatedData['name'];
    $category->slug = $validatedData['slug'];
    $category->image = $request->file('image')->store('images', 'public');
    $category->save();

    return redirect('/admin/categories');
}

    //Edit
    public function edit(Category $category) {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
    
        // Log the request data to debug
        Log::info($request->all());
    
        try {
            $category->name = $request->name;
            $category->slug = $request->slug;
          
    
            if ($request->hasFile('image')) {
                Log::info('Request data:', $request->all());
    
                $path = $request->file('image')->store('images', 'public');
                Log::info('Image stored at: ' . $path);
                $category->image = $path;
            }
    
            $category->save();
    
            return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating category: ' . $e->getMessage());
        }
    }
    
    public function destroy(Category $category){
        $category->delete();
        return redirect('/categories/index');
    }
    public function viewcategory($name)
    {
        if (Category::where('name', $name)->exists()) {
            $category = Category::where('name', $name)->first();
            
            // Assuming you want to pass all categories to the view
            $categories = Category::all();
            
            $dishes = Dish::where('category_id', $category->id)->get();
            
            return view('dishes.index', compact('category', 'categories', 'dishes'));
        } else {
            return redirect('/dishes/index')->with('status', 'Not Found');
        }
    }
    
}
