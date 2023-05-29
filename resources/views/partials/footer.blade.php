<footer>
    <div class="footer-top py-5">
        <div class="container">
            <div class="row flex-wrap">
                @foreach ($database["footerLinks"] as $footerLinks)

                    <div class="col">
                        <h4 class="text-white text-uppercase">{{$footerLinks["title"]}}</h4>
                        <ul class="list-unstyled">
                            @foreach ($footerLinks["links"] as $link)
                                <li>
                                    <a class="opacity-50 text-capitalize" href="{{route("home")}}">{{ $link["text"] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <div class="footer-bottom">

        <div class="container d-flex align-items-center justify-content-between py-4">
            <div><button class="text-uppercase text-white px-3 py-2">sign-up-now!</button></div>
            <div class="d-flex align-items-center">
                <h5 class="text-uppercase dc-text-primary my-0">follow us</h5>
                <div class="ms-4">
                    <img class="ms-3" src="/img/footer-facebook.png" alt="Our Facebook Page">
                    <img class="ms-3" src="/img/footer-twitter.png" alt="Our Twitter Page">
                    <img class="ms-3" src="/img/footer-youtube.png" alt="Our Youtube Page">
                    <img class="ms-3" src="/img/footer-pinterest.png" alt="Our Pinterest Page">
                    <img class="ms-3" src="/img/footer-periscope.png" alt="Our Periscope Page">
                </div>
            </div>
        </div>
    </div>
</footer>
