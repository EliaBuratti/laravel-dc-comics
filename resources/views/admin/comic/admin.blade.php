@extends('partials.app')

@section('content')
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="#">Dc Comic</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#" aria-current="page">Dashboard <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Comics</a>
                        </li>

                    </ul>

                    <button class="btn btn-success">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </button>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <div class="container mt-4">

            <div class="comic-list mt-5">
                <h3>List comics</h3>
                <button class="btn btn-primary">
                    <a class="nav-link" href="{{ route('comic.create') }}">Add comic</a>
                </button>
                <table class="table my-4 border">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td>
                                    {{-- per link --}}
                                    <img width="150" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">


                                    <img width="150" src="{{ asset('storage/' . $comic->thumb) }}"
                                        alt="{{ $comic->title }}">{{-- per immagini caricate da locale --}}

                                    {{-- le lascio entrambe per vederle --}}
                                </td>
                                <td>{{ $comic->title }}</td>
                                <td>
                                    <a href="{{ route('comic.show', $comic->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('comic.edit', $comic->id) }}" class="btn btn-secondary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </main>
@endsection
