@extends('layouts.main')

@section('content')

    <div class="container">
        <h1>inserimento nuovo comic</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="title" class="form-control" id="title" name="title" placeholder="inserire il titolo">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="thumb" class="form-control" id="thumb" name="thumb" placeholder="inserire la URL dell'immagine">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success py-4">Create</button>
        </form>
    </div>

@endsection
