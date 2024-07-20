@extends('layouts.app')

@section('content')
    <h1>Danh sách sản phẩm</h1>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ number_format($product['price']) }} VND</p>
                        <a href="{{ route('product.detail', $product['id']) }}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
