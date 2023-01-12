@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="py-2">{{$comic->title}}</h1>
                <span class="fs-4 text-capitalize d-block py-1">Type: <strong>{!!$comic->type!!}</strong></span>
                <span class="fs-4 text-capitalize d-block py-1">Series: <strong>{!!$comic->series!!}</strong></span>
                <span class="fs-4 text-capitalize d-block py-1">Sale Date: <strong>{!!$comic->sale_date!!}</strong></span>
                <span class="fs-4 text-capitalize d-block py-1">Price: <strong>${!!$comic->price!!}</strong></span>
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
