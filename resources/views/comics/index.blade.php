@extends("layouts.app")

@section("page_title")
    Home
@endsection

@section("main_content")
<div class="main-bg-dark">
    <div class="p-5 text-white container">
        <div class="row">
            @foreach ($comics as $comic)
                <a href="{{route("comic.show", $comic->id)}}" class="col-12 col-sm-6 col-md-3 col-lg-2 d-flex flex-column align-items-center justify-content-center g-4">
                    <div class="img-box d-flex justify-content-center">
                        <img class="img-fluid" src="{{$comic->thumb}}" :alt="{{$comic->title}}">
                    </div>
                    <div class="text-center">{{ $comic->title }}</div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@include("partials.bridge")
@endsection
