<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Today's Trains</title>
</head>
<body>
    <header>
        <h1>Today's Trains</h1>
    </header>

    <main>
        <table class="table px-5">
            <thead>
                <tr>
                    <th scope="col">Company</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Date</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Train Code</th>
                    <th scope="col">Total Carriages</th>
                    <th scope="col">On Time</th>
                    <th scope="col">Cancelled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($treni as $treno)
                <tr>
                    <td>
                        {{ $treno->company }}
                    </td>
                    <td>
                        {{ $treno->departure_station }}
                    </td>
                    <td>
                        {{ $treno->arrival_station }}
                    </td>
                    <td>
                        {{ $treno->departure_date }}
                    </td>
                    <td>
                        {{ $treno->departure_time }}
                    </td>
                    <td>
                        {{ $treno->arrival_date }}
                    </td>
                    <td>
                        {{ $treno->arrival_time }}
                    </td>
                    <td>
                        {{ $treno->train_code }}
                    </td>
                    <td>
                        {{ $treno->total_carriages }}
                    </td>
                    <td>
                        {{ $treno->on_time }}
                    </td>
                    <td>
                        {{ $treno->cancelled }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>