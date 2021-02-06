<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
        @foreach ($nav as $item)
            <h1 class="logo"><a href="/">{{$item->resi}}</a></h1>
        @endforeach
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                @foreach ($nav as $item)
                    <li class="active"><a href="/">{{$item->home}}</a></li>
                    <li><a href="/article">{{$item->article}}</a></li>
                    <li><a href="/contact">{{$item->contact}}</a></li>
                    <li><a href="/back">{{$item->backoffice}}</a></li>
                @endforeach
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
