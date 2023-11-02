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
                        <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                    </button>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <div class="container mt-4">

            <form action="{{ route('comic.update', $comic) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Comic Title:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Write comic title"
                        value="{{ $comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" class="form-control" name="description" id="description"
                        placeholder="Description of comic" value="{{ $comic->description }}">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label d-block">Thumb:</label>
                    {{-- per link --}}
                    <img width="150" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">


                    <img width="150" src="{{ asset('storage/' . $comic->thumb) }}"
                        alt="{{ $comic->title }}">{{-- per immagini caricate da locale --}}

                    {{-- le lascio entrambe per vederle --}}
                    <input type="file" class="form-control mt-2" name="thumb" id="thumb" placeholder="cover image">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" class="form-control" name="price" id="price"
                        placeholder="Price of comic book" value="{{ $comic->price }}">
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artists:</label>
                    <input type="text" class="form-control" name="artists" id="artists"
                        placeholder="artists of comic book" value="{{ $comic->artists }}">
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Writers:</label>
                    <input type="text" class="form-control" name="writers" id="writers"
                        placeholder="writers of comic book" value="{{ $comic->writers }}">
                </div>

                <div class="mb-3">
                    <label for="sale date" class="form-label">Sale date:</label>
                    <input type="text" class="form-control" name="sale date" id="sale date"
                        placeholder="sale date of comic book" value="{{ $comic->sale_date }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type:</label>
                    <input type="text" class="form-control" name="type" id="type"
                        placeholder="type of comic book" value="{{ $comic->type }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </main>
@endsection
