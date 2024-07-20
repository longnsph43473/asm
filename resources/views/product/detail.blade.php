@extends('layouts.app')

@section('content')
    <div class="card">
        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
        <div class="card-body">
            <h1 class="card-title">{{ $product['name'] }}</h1>
            <p class="card-text">{{ $product['description'] }}</p>
            <p class="card-text">{{ number_format($product['price']) }} VND</p>
            <form action="{{ route('cart.add', $product['id']) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="quantity">Số lượng:</label>
                    <input type="number" name="quantity" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
            </form>
        </div>
    </div>
@endsection
