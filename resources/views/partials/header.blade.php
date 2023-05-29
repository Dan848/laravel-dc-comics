<header class="container d-flex justify-content-between align-items-center fw-bold">
    <a href="{{route("home")}}" class="py-3">
        <img src="/img/dc-logo.png" alt="Logo DC">
    </a>
    <div class="py-3">
        <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-3 m-0 p-0">
            @foreach ($database["headerLinks"] as $link)
                <li class="text-uppercase mx-2">
                    <a href="{{route("home")}}">{{ $link["text"] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
<div class="hero-section"><img src="/img/jumbotron.jpg" alt="Jumbotron"></div>

