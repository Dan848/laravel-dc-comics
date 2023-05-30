@extends("layouts.app")

@section("page_title")
    {{$comic["title"]}}
@endsection

@section("main_content")
<!-- Main Bg White -->
<div class="main-bg-white">
    <!-- Blue Line -->
    <div class="blue-stripes">
        <div class="container px-5 position-relative h-100">
            <div class="img-box absolute">
                <img class="img-fluid" src="{{$comic["thumb"]}}" alt="">
            </div>
        </div>
    </div>
    <div class="container p-5">
        <div class="row">
            <!-- Comic -->
            <div class="col">
                <h2 class="mb-4 text-uppercase">{{$comic["title"]}}</h2>
                <div class="container price-checker mt-1 my-3">
                    <div class="row">
                        <div class="col d-flex justify-content-between fw-bold py-3 px-4 border-bottom">
                            <div>
                                <span class="opacity-75">U.S. Price:</span>
                                {{$comic["price"]}}
                            </div>
                           <div class="text-uppercase">available</div>
                        </div>
                        <div class="col-auto px-4 py-3 border-start border-bottom">
                            Check Availability
                            <i class="fa-solid fa-caret-down small ms-1"></i>
                        </div>
                    </div>
                </div>
                <p class="">
                    {{$comic["description"]}}
                </p>
            </div>
            <!-- Advertisement -->
            <div class="col-auto text-end">
                <h6 class="text-uppercase text-end opacity-75">Advertisement</h6>
                <img src="/img/publ.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Main Bg Gray -->
<div class="main-bg-gray">
    <div class="container pt-5 px-5 mb-5">
        <div class="row gap-5">
            <!-- Talent -->
            <div class="col">
                <h4 class="mb-4">Talent</h4>
                <div class="row border-top border-bottom py-2 justify-content-between">
                    <div class="col-auto small">
                        Art by:
                    </div>
                    <div class="col-8 ms-5 ps-5 lh-1">
                        {{-- Artist --}}
                        <span class="dc-text-primary small">{{$comic["artists"]}}</span>,

                    </div>
                </div>
                <div class="row border-top border-bottom py-2 justify-content-between">
                    <div class="col-auto small">
                        Written by:
                    </div>
                    <div class="col-8 ms-5 ps-5 lh-1">
                        {{-- Artist --}}
                        <span class="dc-text-primary small">{{$comic["writers"]}}</span>,
                    </div>
                </div>
            </div>
            <!-- Specs -->
            <div class="col">
                <h4 class="mb-4">Specs</h4>
                <div class="row border-top border-bottom py-2 justify-content-between">
                    <div class="col-auto small">
                        Series
                    </div>
                    <div class="col-8 ms-5 ps-5 lh-1">
                        <span class="dc-text-primary text-uppercase small">{{$comic["series"]}}</span>,
                    </div>
                </div>
                <div class="row border-top border-bottom py-2 justify-content-between">
                    <div class="col-auto small">
                        U.S. Price:
                    </div>
                    <div class="col-8 ms-5 ps-5 lh-1">
                        <span class="text-uppercase small">{{$comic["price"]}}</span>
                    </div>
                </div>
                <div class="row border-top border-bottom py-2 justify-content-between">
                    <div class="col-auto small">
                        On Sale Date
                    </div>
                    <div class="col-8 ms-5 ps-5 lh-1">
                        <span class="small">{{ date('M d Y', strtotime($comic["sale_date"])) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid border mt-5">
        <div class="container">
            <div class="row">
                @foreach ($database["bridgeSection"] as $bridge)
                    <div class="col d-flex justify-content-between border p-3">
                        <div class="text-uppercase small
                        fw-bold opacity-50">{{$bridge["text"]}}</div>
                        <img class="img-fluid" src="/img/{{$bridge["src"]}}" alt="{{$bridge["text"]}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
