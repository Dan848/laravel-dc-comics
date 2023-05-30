<header>
    <nav class="container d-flex justify-content-between align-items-center fw-bold p-0 navbar navbar-expand-md">
        <a href="{{route("home")}}" class="py-3">
            <img src="/img/dc-logo.png" alt="Logo DC">
        </a>
        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHeader" aria-controls="collapseHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="py-3 collapse navbar-collapse justify-content-end" id="collapseHeader">
            <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-3 m-0 p-0 navbar-nav">
                @foreach ($database["headerLinks"] as $link)
                    <li class="text-uppercase mx-2">
                        <a href="{{route("home")}}">{{ $link["text"] }}</a>
                    </li>
                @endforeach
            </ul>
            <a href="{{route("comic.create")}}" class="mt-3 mt-md-0 ms-md-2 btn btn-primary">Add Comic</a>
        </div>
    </nav>

</header>
<div class="hero-section"><img src="/img/jumbotron.jpg" alt="Jumbotron"></div>

