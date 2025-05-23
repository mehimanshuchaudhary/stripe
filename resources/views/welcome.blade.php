<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Stripe Integration</title>
</head>
<body>
    <h2>Product: Laptop</h2>
    <h3>Price: $5</h3>
    <form action="{{ route('stripe') }}" method="post">
        @csrf
        <input type="hidden" name="price" value="10">
        <input type="hidden" name="product_name" value="Laptop">
        <input type="hidden" name="quantity" value="1">
        <button type="submit">Pay with Stripe</button>
    </form>
</body>
</html>
