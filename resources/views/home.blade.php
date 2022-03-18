<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    @foreach($trains as $train)
    <p><strong>Compagnia: </strong>{{ $train->company }}</p>
    <p><strong>Stazione di partenza: </strong>{{ $train->departure_station }}</p>
    <p><strong>Stazione di arrivo: </strong>{{ $train->arrival_station }}</p>
    <p><strong>Orario di partenza: </strong>{{ $train->departure_time }}</p>
    <p><strong>Orario di arrivo: </strong>{{ $train->arrival_time }}</p>
    <p><strong>Codice treno: </strong>{{ $train->train_code }}</p>
    <p><strong>Numero di carrozze: </strong>{{ $train->carriages }}</p>
    <strong>Status: </strong>
    @if($train->in_time)
    <span>In Orario</span>
    @elseif($train->deleted)
    <span>Cancellato</span>
    @endif
    @endforeach
</body>

</html>