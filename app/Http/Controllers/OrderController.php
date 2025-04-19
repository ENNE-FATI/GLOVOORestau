<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    /**
     * Enregistre une nouvelle commande
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Validation plus robuste
        $validated = $request->validate([
            'product_id' => [
                'required',
                'integer',
                'exists:products,id',
                // Vérifie que le produit est disponible
                function ($attribute, $value, $fail) {
                    if (!Product::where('id', $value)->where('is_available', true)->exists()) {
                        $fail('Ce produit n\'est pas disponible.');
                    }
                }
            ],
            'quantity' => 'sometimes|integer|min:1|max:10'
        ]);

        try {
            $order = Auth::user()->orders()->create([
                'product_id' => $validated['product_id'],
                'quantity' => $validated['quantity'] ?? 1,
                'total_price' => Product::find($validated['product_id'])->price * ($validated['quantity'] ?? 1),
                'status' => 'preparing',
                'order_number' => 'CMD-' . strtoupper(uniqid())
            ]);

            // Événement pour traitement ultérieur (notification, etc.)
            event(new \App\Events\OrderPlaced($order));

            return redirect()
                ->route('orders.show', $order)
                ->with('success', 'Votre commande a été passée avec succès!');

        } catch (\Exception $e) {
            // Journalisation de l'erreur
            \Log::error('Erreur création commande: ' . $e->getMessage());
            
            return back()
                ->withInput()
                ->with('error', 'Une erreur est survenue lors de la commande.');
        }
    }

    /**
     * Affiche les détails d'une commande
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\View\View
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Order $order)
    {
        // Vérifie que l'utilisateur peut voir cette commande
        $this->authorize('view', $order);

        // Charge les relations nécessaires
        $order->load(['product.restaurant', 'user']);

        return view('orders.show', [
            'order' => $order,
            'delivery_steps' => $this->getDeliverySteps($order)
        ]);
    }

    /**
     * Génère les étapes de livraison simulées
     */
    protected function getDeliverySteps(Order $order): array
    {
        $restaurant = $order->product->restaurant;
        
        // Coordonnées factices pour la démo
        return [
            'restaurant' => [
                'lat' => $restaurant->latitude,
                'lng' => $restaurant->longitude,
                'name' => $restaurant->name
            ],
            'destination' => [
                'lat' => $restaurant->latitude + 0.01,
                'lng' => $restaurant->longitude + 0.01,
                'address' => Auth::user()->delivery_address
            ],
            'steps' => 20 // Nombre d'étapes pour l'animation
        ];
    }
}