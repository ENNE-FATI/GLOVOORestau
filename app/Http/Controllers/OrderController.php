<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'product_id' => 'required|numeric',
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric|min:0',
        ]);
        
        return view('order.create', [
            'product' => $request->only(['product_id', 'product_name', 'product_price'])
        ]);
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|numeric',
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric|min:0',
            'delivery_address' => 'required|string|max:500',
        ]);
        
        $order = Order::create([
            'user_id' => Auth::id(),
            'product_id' => $validated['product_id'],
            'product_name' => $validated['product_name'],
            'total_price' => $validated['product_price'],
            'delivery_address' => $validated['delivery_address'],
            'status' => 'pending',
        ]);
        
        return redirect()->route('order.track', $order)->with('success', 'Order placed successfully!');
    }
    
    public function track(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        
        return view('order.track', compact('order'));
    }
}