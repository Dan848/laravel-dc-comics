@extends("layouts.app")

@section("page_title")
    Add Comic
@endsection

@section("main_content")
<div class="main-bg-dark">
    <div class="p-5 text-white container">
        <form action="{{route("comic.store")}}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text">Title</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Title..." name="title">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Thumbnail</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Image link" name="thumb">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Price</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Price..." name="price">
                <span class="input-group-text">Sale Date</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="YYYY-MM-GG" name="sale_date">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Artists</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Artists..." name="artists">
                <span class="input-group-text">Writers</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Writers.." name="writers">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Series</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Series..." name="series">
                <span class="input-group-text">Type</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Type..." name="type">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Description</span>
                <textarea type="text" class="form-control" aria-label="With textarea" rows="3" placeholder="Description..." name="description"></textarea>
            </div>
            <input class="btn btn-primary fw-bolder w-100" type="submit" value="Done">
        </form>
    </div>
</div>
@include("partials.bridge")
@endsection
