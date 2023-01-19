@extends('layouts.main')

@section('content')

    <div class="container">
        <h1>Inserimento nuovo comic</h1>

        <form action="{{route('comics.update', $comic)}}" method="POST">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">TITOLO</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$comic->title}}" placeholder="Inserisci titolo...">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label fw-bold">COPERTINA</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{$comic->thumb}}"
                    placeholder="Inserisci URL copertina...">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fw-bold">PREZZO</label>
                <input type="text" class="form-control" name="price" id="price" value="{{$comic->price}}"
                    placeholder="Inserisci prezzo in €...">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label fw-bold">SERIE</label>
                <input type="text" class="form-control" name="series" id="series" value="{{$comic->series}}"
                    placeholder="Inserisci serie comics...">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label fw-bold">DATA DI USCITA</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{$comic->sale_date}}"
                    placeholder="Inserisci data di uscita...">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label fw-bold">GENERE COMICS</label>
                <input type="text" class="form-control" name="type" id="type" value="{{$comic->type}}"
                    placeholder="Inserisci genere comics...">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">DESCRIZIONE</label>
                <textarea class="form-control" name="description" id="description" rows="3" value="{{$comic->description}}"
                    placeholder="Inserisci descrizione..."></textarea>
            </div>
            <button type="submit" class="btn btn-success py-4">Create</button>
        </form>
    </div>

@endsection
