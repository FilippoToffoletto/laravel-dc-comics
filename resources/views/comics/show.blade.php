@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="py-2">{{$comic->title}}</h1>
                <span class="fs-3 text-capitalize d-block py-1">Type:{!!$comic->type!!}</span>
                <span class="fs-3 text-capitalize d-block py-1">Series:{!!$comic->series!!}</span>
                <span class="fs-3 text-capitalize d-block py-1">Sale Date:{!!$comic->sale_date!!}</span>
                <span class="fs-3 text-capitalize d-block py-1">${!!$comic->price!!}</span>
                <p class="me-4 text-justify mt-3">{!!$comic->description!!}</p>


                <!-- $new_comic->price= $comic_item['price'];
                $new_comic->sale_date= $comic_item['sale_date'];
                -->

            </div>
            <div class="col-4">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="py-2 w-75">
            </div>


        </div>
    </div>

@endsection
