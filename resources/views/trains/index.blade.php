<h1>Treni in partenza oggi</h1>

<ul>
    @foreach ($trains as $train)
        <li>
            {{ $train->company }} - {{ $train->departure_station }} -> {{ $train->arrival_station }} ({{ $train->departure_time }})
        </li>
    @endforeach
</ul>
