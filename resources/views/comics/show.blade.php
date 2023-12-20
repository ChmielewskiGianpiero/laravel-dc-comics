@extends('layout.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <h1 class="text-center">{{$comic->title}}</h1>
            <img class="w-25" src="{{ $comic->thumb }}" alt="">
            <ul class="text-center">
                <li>{{$comic->type}}</li>
                <li>{{$comic->price}}</li>
                <li>{{$comic->series}}</li>
                <li>{{$comic->sale_date}}</li>
                <li>{{$comic->description}}</li>
            </ul>
        </div>
    </div>
    
@endsection