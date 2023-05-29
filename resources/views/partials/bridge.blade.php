<section class="w-100 py-5 text-white main-div bridge-section">
    <div class="container">
        <div class="row">
            @foreach ( $database["bridgeSection"] as $bridge)
                <div class="col mb-3 d-flex justify-content-center align-items-center gap-1">
                    <div><img class="img-fluid" src="/img/{{$bridge["src"]}}" alt="{{$bridge["text"]}}"></div>
                    <div class="text-uppercase ms-3">{{ $bridge["text"] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
