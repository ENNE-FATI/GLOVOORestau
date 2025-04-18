@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Confirm Your Order</h4>
                </div>

                <div class="card-body">
                    <div class="mb-4">
                        <h3 class="text-primary">{{ $product['name'] }}</h3>
                        <p class="h5">Price: ${{ number_format($product['price'], 2) }}</p>
                    </div>
                    
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                        <input type="hidden" name="product_name" value="{{ $product['name'] }}">
                        <input type="hidden" name="product_price" value="{{ $product['price'] }}">
                        
                        <div class="form-group mb-4">
                            <label for="delivery_address" class="form-label">Delivery Address</label>
                            <input type="text" class="form-control @error('delivery_address') is-invalid @enderror" 
                                   id="delivery_address" name="delivery_address" required>
                            @error('delivery_address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Confirm Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection