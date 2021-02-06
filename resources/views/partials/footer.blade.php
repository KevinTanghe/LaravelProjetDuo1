<footer id="footer">
    <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
            @foreach ($footer as $item)
                <div class="copyright">
                    {{$item->copyright}}
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
                    {{$item->p1}} <a href="https://bootstrapmade.com/">{{$item->p2}}</a>
                </div>
            @endforeach
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            @foreach ($reseaux as $item)
                <a href="#"><i class="{{$item->Reseaux}}"></i></a>
            @endforeach
        </div>
    </div>
</footer><!-- End Footer -->
