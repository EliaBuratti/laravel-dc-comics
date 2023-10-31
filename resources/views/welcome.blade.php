<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/bootstrap.js'])
</head>

<body>
    <div class="container p-0">
        <div class="row row-cols-md-2">
            @foreach ($comics as $comic)
                <div class="col my-4">
                    <div class="card p-4">
                        <img style="aspect-ratio: 1 / 1.5" src="{{ $comic->thumb }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">
                                <strong>Descrizione:</strong>
                                {{ $comic->description }}
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Price:</strong> {{ $comic->price }}</li>
                            <li class="list-group-item"><strong>Type:</strong> {{ $comic->type }}</li>
                            <li class="list-group-item"><strong>Artist:</strong> {{ $comic->artists }}</li>
                            <li class="list-group-item"><strong>Writers:</strong> {{ $comic->writers }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
