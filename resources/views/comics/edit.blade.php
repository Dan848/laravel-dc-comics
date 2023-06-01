@extends("layouts.app")

@section("page_title")
    Edit {{$comic->title}}
@endsection

@section("main_content")
<div class="main-bg-dark">
    <div class="p-5 text-white container">
        <form action="{{route("comic.update", $comic->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="input-group mb-3">
                <span class="input-group-text">Title</span>
                <input type="text" class="form-control @error('title') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{$comic->title}}" name="title" value="{{$comic->title}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Thumbnail</span>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{$comic->thumb}}" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Price</span>
                <input type="text" class="form-control @error('price') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{$comic->price}}" name="price" value="{{$comic->price}}">
                <span class="input-group-text">Sale Date</span>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{$comic->sale_date}}" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Artists</span>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{$comic->artists}}" name="artists" value="{{$comic->artists}}">
                <span class="input-group-text">Writers</span>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{$comic->writers}}" name="writers"value="{{$comic->writers}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Series</span>
                <input type="text" class="form-control @error('series') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{$comic->series}}" name="series" value="{{$comic->series}}">
                <span class="input-group-text">Type</span>
                <input type="text" class="form-control @error('type') is-invalid @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{$comic->type}}" name="type" value="{{$comic->type}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Description</span>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" aria-label="With textarea"
                rows="3" placeholder="{{$comic->description}}" name="description">{{$comic->description}}</textarea>
            </div>
            <input class="btn btn-primary fw-bolder w-100" type="submit" value="Done">
        </form>
    </div>
</div>
@include("partials.bridge")
@endsection
