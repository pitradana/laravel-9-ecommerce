<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    @foreach ($products as $product)
        <p>Name : {{ $product->name }}</p>
        <img src="{{ url('storage/' . $product->image) }}" alt="" height="100px">
        <p>{{ url('storage/' . $product->image) }}</p>
        <form action="{{ route('show_product', $product) }}" method="get">
            <button type="submit">Show Detail</button>
        </form>
        <p>{{ url('storage/' . $product->image) }}</p>
    @endforeach
</body>
</html>