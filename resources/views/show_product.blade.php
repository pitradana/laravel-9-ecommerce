@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Detail') }}</div>

                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <div class="">
                            <img src="{{ url('storage/' . $product->image) }}" alt="" width="200px">
                        </div>
                        <div class="">
                            <h1>{{ $product->name }}</h1>
                            <h6>{{ $product->description }}</h6>
                            <h3>Rp {{ $product->price }}</h3>
                            <br>
                            <p>{{ $product->stock }} left</p>
                            <form action="{{ route('add_to_cart', $product) }}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" aria-describedby="basic-addon2" name="amount" value=1>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-outline-secondary">Add to cart</button>
                                    </div>
                                </div>
                            </form>
                            <form action="{{ route('edit_product', $product) }}" method="get">
                                <button type="submit" class="btn btn-primary">Edit product</button>
                            </form>
                        </div>
                    </div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Product</title>
</head>
<body>
    <a href="{{ route('index_product') }}">Back to Index Product</a>
    <p>Name: {{ $product->name }}</p>
    <p>Description: {{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <img src="{{ url('/storage/' . $product->image) }}" alt="" height="100px">
    
    <form action="{{ route('edit_product', $product) }}" method="get">
        <button type="submit">Edit Product</button>
    </form>

    <form action="{{route('add_to_cart', $product)}}" method="post">
        @csrf
        <input type="number" name="amount" value=1>
        <button type="submit">Add to cart</button>
    </form>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
</body>
</html> --}}