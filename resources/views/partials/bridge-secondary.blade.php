{{-- Bridge Secondary --}}
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
