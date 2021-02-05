<section id="why-us" class="why-us">
    <div class="container">
        <div class="row">
            @foreach ($card as $item)
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="titreCard">
                        <h1>{{ $item->titre }}</h1>
                    </div>
                    <div class="box">
                        <span>{{ $item->chiffre }}</span>
                        <h4>{{ $item->sousTitre }}</h4>
                        <p>{{ $item->content }}</p>
                    </div>
                </div>
                @if ($loop->iteration % 3 == 0)
        </div>
        <div class="row">

            @endif
            @endforeach


        </div>
    </div>
</section><!-- End Why Us Section -->