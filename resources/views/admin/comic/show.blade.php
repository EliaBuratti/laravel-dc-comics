@extends('partials.app')

@section('content')
    <div class="container">
        <div class="action mt-4">
            <a class="btn btn-success" href="{{ route('admin') }}">Go back</a>
        </div>
        <div class="my-4">
            <div class="card col-6 p-4 mx-auto">
                <img style="aspect-ratio: 1 / 1.5" src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <img style="aspect-ratio: 1 / 1.5" src="{{ asset('storage/' . $comic->thumb) }}" alt="{{ $comic->title }}">

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
    </div>
@endsection
