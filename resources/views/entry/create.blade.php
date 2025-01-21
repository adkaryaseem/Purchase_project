
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Entry</title>
</head>
<body>
    <form action="{{ route('entry.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>
                    Date:
                </td>
            <td>
                <input type="date" value="{{ date('Y-m-d') }}" name="date">
            </td>
        </tr>
        <tr>
            <td>
                Product Name 
            </td>
            <td>
                <select name="product">
                    @foreach ($products as $product )
                    <option value="{{$product->id}}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Qty.
            </td>
            <td>
                <input type="text" name="quantity">
            </td>
        </tr>
        <tr>
            <td>
                Rate 
            </td>
            <td>
                <input type="text" name="rate">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Create</button>
            </td>
        </tr>          
        </table>
    </form>
</body>
</html>