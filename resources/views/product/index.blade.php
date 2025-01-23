<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('product.create') }}"><h1> Create Product Entry</h1> </a>
    {{-- <a href="{{ route('product.edit') }}"><h1>Edit Product Entry</h1></a> --}}
    {{-- {{dd($products)}} --}}

    <table width="100%" border="2">
        <tr>
            <th>
                S.N. 
            </th>
            <th>
                Name :
            </th>
            <th colspan="2">
                Action 
            </th>
        </tr>
        {{-- @foreach ($products as $product)
            <tr>
                <td>
                    {{ $product->id }}
                </td>
                <td>
                    {{ $product->name }}
                </td>
            </tr>
        @endforeach --}}
        {{-- <tr>
            <td colspan="2">
                Hello 
            </td>
        </tr> --}}
        @foreach ($products as $index=>$product)
            <tr>
                <td>
                    {{ ++$index }}
                </td>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    <a href="{{ route('product.edit',[$product->id]) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('product.delete',[$product->id]) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>