<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Affiche la liste des restaurants
     */
    public function index()
    {
        $restaurants = Restaurant::with('products')->get();
        return view('restaurants.index', compact('restaurants'));
    }

    /**
     * Affiche les détails d'un restaurant et ses produits
     *
     * @param  Restaurant  $restaurant
     * @return \Illuminate\View\View
     */
    public function show(Restaurant $restaurant)
    {
        // Charge les produits associés pour éviter le N+1 problem
        $restaurant->load('products');
        
        return view('restaurants.show', [
            'restaurant' => $restaurant,
            'products' => $restaurant->products
        ]);
    }

    /**
     * Traite la commande depuis le restaurant
     *
     * @param  Request  $request
     * @param  Restaurant  $restaurant
     * @return \Illuminate\Http\RedirectResponse
     */
    public function order(Request $request, Restaurant $restaurant)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id,restaurant_id,'.$restaurant->id
        ]);

        // Création de la commande
        $order = $request->user()->orders()->create([
            'product_id' => $validated['product_id'],
            'status' => 'pending'
        ]);

        return redirect()->route('orders.show', $order)
               ->with('success', 'Commande passée avec succès!');
    }
}