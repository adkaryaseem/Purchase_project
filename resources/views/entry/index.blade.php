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

        <form action="{{ route('entry.search') }}" method="GET">
            <input type="text" name="search" id="search">
            <button type="submit">Search</button>
        </form>

    <table width="100%" border="1">
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
            <th colspan="2">
                Action
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
                <td>
                <a href="{{ route('entry.edit',[$entry->id]) }}">Edit</a>
                </td>
                <td>
                        <form action="{{ route('entry.delete',[$entry->id]) }}" method="POST">
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