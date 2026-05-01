<h1>Product List</h1>

@foreach($products as $product)
    <p>
        <strong>{{ $product->name }}</strong> <br>
        Quantity: {{ $product->quantity }} <br>
        Price: ₱{{ number_format($product->price, 2) }}
    </p>
    <hr>
@endforeach