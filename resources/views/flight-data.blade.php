<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flight Data</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="antialiased">
    <div class="main">
        <table class="flight-table">
            <thead>
                <tr>
                    <th>ticket id</th>
                    <th>origin</th>
                    <th>destination</th>
                    <th>date</th>
                    <th>flight number</th>
                    <th>airline</th>
                    <th>price</th>
                    <th>count</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flights as $flight)
                <tr>
                    <td>{{ $flight['ticket_id'] }}</td>
                    <td>{{ $flight['origin'] }}</td>
                    <td>{{ $flight['destination'] }}</td>
                    <td>{{ $flight['date'] }}</td>
                    <td>{{ $flight['flight_number'] }}</td>
                    <td>{{ $flight['airline'] }}</td>
                    <td>{{ $flight['price'] }}</td>
                    <td>{{ $flight['count'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>