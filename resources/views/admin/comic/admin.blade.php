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

            <form action="{{ route('admin.create') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Comic Title:</label>
                    <input type="text" class="form-control" name="title" id="title"
                        placeholder="Write comic title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" class="form-control" name="description" id="description"
                        placeholder="Description of comic">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb:</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="cover image">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" class="form-control" name="price" id="price"
                        placeholder="Price of comic book">
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artists:</label>
                    <input type="text" class="form-control" name="artists" id="artists"
                        placeholder="artists of comic book">
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Writers:</label>
                    <input type="text" class="form-control" name="writers" id="writers"
                        placeholder="writers of comic book">
                </div>

                <div class="mb-3">
                    <label for="sale date" class="form-label">Sale date:</label>
                    <input type="text" class="form-control" name="sale date" id="sale date"
                        placeholder="sale date of comic book">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type:</label>
                    <input type="text" class="form-control" name="type" id="type"
                        placeholder="type of comic book">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>


            <div class="comic-list mt-5">
                <h3>List comics</h3>
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
                                    <img width="150" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                </td>
                                <td>{{ $comic->title }}</td>
                                <td>
                                    <a href="{{ route('comic.show', $comic->id) }}" class="btn btn-primary">View</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </main>
@endsection
