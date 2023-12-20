@extends('layout.app')


@section('content')
    
    <div class="container">
        <form action="{{ route('comics.store')}}" method='POST'>
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Comic type">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Comic thumb">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Comic price">
            </div>
        
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Comic series">
            </div>
        
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input class="form-control" type="date" name="sale_date" id="sale_date" placeholder="Sale Date">
            </div>
                <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Add description"></textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="crea">
            </div>
        </form>
    </div>
    
@endsection