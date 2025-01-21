<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('entry.create') }}">Create Entry</a>
    <table>
        <tr>
            <th>
                Bill No.
            </th>
            <th>
                Purchase Date
            </th>
            <th>
                Product
            </th>
            <th>
                Qty.
            </th>
            <th>
                Rate
            </th>
        </tr>
        @foreach ($entries as $entry)
            <tr>
                <td>
                    {{ $entry->id }}
                </td>
                <td>
                    {{ $entry->date }}
                </td>
                <td>
                    {{ $entry->product->name }}
                </td>
                <td>
                    {{ $entry->quantity }}
                </td>
                <td>
                    {{ $entry->rate }}
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>