@extends('layout.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <h1 class="text-center">{{$comic->title}}</h1>
            <img class="w-25" src="{{ $comic->thumb }}" alt="">
        </div>
    </div>
    
@endsection