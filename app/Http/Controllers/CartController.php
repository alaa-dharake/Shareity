<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class CartController extends Controller
{
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
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');

            // Get the previous quantity from the cart
            $previousQuantity = $cart[$request->id]['quantity'];

            // Update the cart quantity
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);

            // Calculate the new subtotal and total
            $subtotal = $cart[$request->id]['price'] * $cart[$request->id]['quantity'];
            $total = 0;
            foreach ($cart as $id => $details) {
                $total += $details['price'] * $details['quantity'];
            }

            // Update the dish quantity in the database
            $dish = Dish::find($request->id);
            if ($dish) {
                $quantityChange = $request->quantity - $previousQuantity; // Calculate the difference
                $newQuantity = $dish->quantity - $quantityChange; // Adjust the quantity in the dishes table
                if ($newQuantity < 0) {
                    return response()->json(['status' => 'error', 'message' => 'Not enough stock available.']);
                }
                $dish->quantity = $newQuantity;
                $dish->save();
            }

            return response()->json(['status' => 'success', 'subtotal' => $subtotal, 'total' => $total]);
        }
        return response()->json(['status' => 'error', 'message' => 'Invalid request.']);
    }

    public function delete(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);

                // Calculate the new total
                $total = 0;
                foreach ($cart as $id => $details) {
                    $total += $details['price'] * $details['quantity'];
                }

                return response()->json(['status' => 'success', 'total' => $total]);
            }
        }
        return response()->json(['status' => 'error', 'message' => 'Invalid request.']);
    }
}