<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
        <h3>
            <a href="{{ route('entry.index') }}">Purchase Entry</a>
        </h3>
        <h3>
            <a href="{{route('product.index')}}">Product Entry</a>
        </h3>
        <h3>
            {{-- <a href="{{route('purchase.ledger')}}">Ledger view</a> --}}
        </h3>
    </body>
</html>