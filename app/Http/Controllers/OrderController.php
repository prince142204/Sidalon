<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Show the order form
    public function showOrderForm()
    {
        return view('order'); // Make sure the view is named 'order.blade.php'
    }

    // Handle the order submission
    public function submitOrder(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'order_details' => 'required|string',
        ]);

        // Here you would typically save the order to the database
        // For example:
        // Order::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('order.form')->with('success', 'Your order has been placed successfully!');
    }
}
