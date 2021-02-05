<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                @foreach ($home as $item)
                    <h1>{{$item->titre}}</h1>
                @endforeach
                    <ul>
                        @foreach ($secondHome as $item)
                            <li><i class="ri-check-line"></i>{{$item->titre}}</li>  
                        @endforeach
                    </ul>
                    <div class="mt-3">
                        @foreach ($home as $item)
                            <a href="#about" class="btn-get-started scrollto">{{$item->boutton1}}</a>
                            <a href="" class="btn-get-quote">{{$item->boutton2}}</a>
                        @endforeach
                    </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->
