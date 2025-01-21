<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('entry.edit') }}" method="GET">
        @csrf
        <table>
            <tr>
                <td>
                    <input type="search" name="search">
                </td>
            </tr>
            <tr>
                <td>
                    PID
                </td>
                <td>
                    Product Name
                </td>
                <td>
                    Date
                </td>
                <td>
                    Item 
                </td>
            </tr>
        </table>
    </form>
</body>
</html>