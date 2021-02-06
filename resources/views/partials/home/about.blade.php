<section id="about" class="about">
    <div class="container">

        <div class="row content">
            <div class="col-lg-6">
                @foreach ($about as $item)
                    <h2>{{$item->topTitle}}</h2>
                    <h3>{{$item->downTitle}}</h3>
                @endforeach
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                @foreach ($about as $item)
                    <p>{{$item->firstText}}</p>
                @endforeach
                <ul>
                    @foreach ($secondAbout as $item)
                        <li><i class="ri-check-double-line"></i> {{$item->liAbout}}</li>
                    @endforeach
                </ul>
                @foreach ($about as $item)
                    <p class="font-italic">
                        {{$item->secondText}}
                    </p>
                @endforeach
            </div>
        </div>

    </div>
</section><!-- End About Section -->
