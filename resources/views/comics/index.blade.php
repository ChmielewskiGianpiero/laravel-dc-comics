@extends('layout.app')

@section('content')
    <div class="container">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Title</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                        <th scope="col" class="btn-th">
                            <a href="{{route('comics.create')}}" class="btn btn-primary" >add comics</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row"></th>
                            <td class="img-row"><img src="{{$comic->thumb}}" alt=""></td>
                            <td>
                                <a href="{{route('comics.show', $comic)}}">
                                    {{$comic->title}}
                                </a>
                            </td>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->series}}</td>
                            <td class="date-row">{{$comic->sale_date}}</td>
                            <td>{{$comic->type}}</td>
                            <td>
                                <a href="#" class="btn btn-secondary" >delete</a>
                            </td>
                        </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection