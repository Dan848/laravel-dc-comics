@extends("layouts.app")

@section("page_title")
    Home
@endsection

@section("main_content")
<div class="main-bg-dark">
    <div class="p-5 text-white container">
        <div class="row">
            @foreach ($database["comics_list"] as $comics)
                <a href="{{ route('comics.comic', ["id" => $loop->index])}}" class="col-12 col-sm-6 col-md-3 col-lg-2 d-flex flex-column align-items-center justify-content-center g-4">
                    <div class="img-box d-flex justify-content-center">
                        <img class="img-fluid" src="{{$comics["thumb"]}}" :alt="{{$comics["title"]}}">
                    </div>
                    <div class="text-center">{{ $comics["title"] }}</div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@include("partials.bridge")
@endsection
