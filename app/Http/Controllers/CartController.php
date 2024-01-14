<?php

namespace App\Http\Controllers;
use App\Models\Eq;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'eq_id' => 'required|exists:eqs,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $eqId = $request->input('eq_id');
        $quantity = $request->input('quantity');

        // Fetch the equipment item from the database
        $equipment = Eq::find($eqId);

        // Ensure the equipment item exists
        if (!$equipment) {
            return response()->json(['error' => 'Equipment not found'], 404);
        }

        // Get the current cart items from the session
        $cartItems = Session::get('cart', []);

        // Check if the equipment item is already in the cart
        if (isset($cartItems[$eqId])) {
            // Increment the quantity if the item is already in the cart
            $cartItems[$eqId]['quantity'] += $quantity;
        } else {
            // Add the equipment item to the cart
            $cartItems[$eqId] = [
                'id' => $equipment->id,
                'name' => $equipment->name,
                'price' => $equipment->prix,
                'quantity' => $quantity,
            ];
        }

        // Save the updated cart items back to the session
        Session::put('cart', $cartItems);

        return response()->json(['success' => 'Item added to the cart']);
    }

    public function showCart()
    {
        // Récupérer les articles du panier depuis la session
    $cartItems = Session::get('cart', []);

    // Passer la variable à la vue
    return view('cart', ['cartItems' => $cartItems]);
    }
}

