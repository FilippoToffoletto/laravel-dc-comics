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
                    <td>
                        <a href="{{route('comics.show', $comic)}}" class="btn btn-primary" title="Show"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pencil"></i></a>
                        {{-- PER IL DELETE SERVE IL FORM --}}
                        <form action="{{route('comics.destroy', $comic)}}" method='POST' class="d-inline" onsubmit="return confirm('Confermi l\'eleminazione di: {{$comic->title}}')">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" title="Delete" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>


                    </td>
                  </tr>
                @empty
                  <h2>Nessun prodotto</h2>
                @endforelse

            </tbody>
          </table>

          {{$comics->links()}}
    </div>

@endsection
