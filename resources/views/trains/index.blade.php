<!DOCTYPE html>
<html>
<head>
    <title>Treni in partenza oggi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Treni in partenza oggi</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di partenza</th>
                    <th>Stazione di arrivo</th>
                    <th>Orario di partenza</th>
                    <th>Codice Treno</th>
                    <th>Carrozze</th>
                    <th>Stato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->number_of_carriages }}</td>
                        <td>
                            @if ($train->cancelled)
                                Cancellato
                            @elseif (!$train->on_time)
                                In ritardo
                            @else
                                In orario
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
