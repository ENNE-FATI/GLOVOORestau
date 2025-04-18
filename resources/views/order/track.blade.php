@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Order #{{ $order->id }}</h4>
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <h3 class="text-primary">{{ $order->product_name }}</h3>
                        <p class="h5">Price: ${{ number_format($order->total_price, 2) }}</p>
                        <p class="h5">Status: <span class="badge bg-info">{{ ucfirst($order->status) }}</span></p>
                        <p class="h5">Delivery Address: {{ $order->delivery_address }}</p>
                    </div>
                    
                    <div class="map-container rounded border">
                        <div id="map" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_key') }}&callback=initMap" async defer></script>
<script>
    function initMap() {
        const restaurant = { lat: 48.8566, lng: 2.3522 };
        const client = {
            lat: restaurant.lat + (Math.random() * 0.01 - 0.005),
            lng: restaurant.lng + (Math.random() * 0.01 - 0.005)
        };
        
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: restaurant,
        });
        
        // Restaurant marker
        new google.maps.Marker({
            position: restaurant,
            map: map,
            title: "Restaurant",
            icon: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
        });
        
        // Client marker
        new google.maps.Marker({
            position: client,
            map: map,
            title: "Your Location",
            icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
        });
        
        // Delivery marker
        const deliveryMarker = new google.maps.Marker({
            position: restaurant,
            map: map,
            title: "Delivery",
            icon: "https://maps.google.com/mapfiles/ms/icons/motorcycle.png"
        });
        
        // Animate delivery
        const route = generateRoute(restaurant, client, 20);
        let step = 0;
        
        function moveMarker() {
            if (step < route.length) {
                deliveryMarker.setPosition(route[step]);
                step++;
                setTimeout(moveMarker, 500);
            }
        }
        
        setTimeout(moveMarker, 1000);
    }
    
    function generateRoute(start, end, steps) {
        const route = [];
        for (let i = 0; i <= steps; i++) {
            const lat = start.lat + (end.lat - start.lat) * (i / steps);
            const lng = start.lng + (end.lng - start.lng) * (i / steps);
            route.push({ lat, lng });
        }
        return route;
    }
</script>
@endsection