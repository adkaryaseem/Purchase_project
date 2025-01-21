
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Entry</title>
</head>
<body>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <table>
        <tr>
            <td>
                Product Name 
            </td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">
                    Create
                </button>
            </td>
        </tr>
        {{-- <tr>
            <td>
                Image
            </td>
            <td>
                <input type="text" name="qty">
            </td>
        </tr>        --}}
        </table>
    </form>
</body>
</html>