@extends('layouts.main')

@section('content')

    <div class="container">
        <h1>Elenco Comics</h1>

        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->type}}</td>
                    <td><a href="{{route('comics.show', $comic)}}" class="btn btn-primary" title="show"><i class="fa-solid fa-eye"></i></a></td>
                  </tr>
                @empty
                  <h2>Nessun prodotto</h2>
                @endforelse

            </tbody>
          </table>

          {{$comics->links()}}
    </div>

@endsection
