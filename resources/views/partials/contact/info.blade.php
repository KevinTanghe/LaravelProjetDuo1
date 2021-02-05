<section id="contact" class="contact section-bg mt-5">
    <div class="container">

        <div class="section-title">
            @foreach ($contact as $item)
                <h2>{{$item->titre}}</h2>
                <p>{{$item->sousTitre}}</p>
            @endforeach
        </div>

        <div class="row">

            <div class="col-lg-6">

                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="info-box">
                            @foreach ($contact as $item)
                                <i class="{{$item->logoAddress}}"></i>
                                <h3>{{$item->titreAddress}}</h3>
                                <p>{{$item->contentAddress}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            @foreach ($contact as $item)
                                <i class="{{$item->logoEmail}}"></i>
                                <h3>{{$item->titreEmail}}</h3>
                                <p>{{$item->contentEmail1}}<br>{{$item->contentEmail2}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            @foreach ($contact as $item)
                                <i class="{{$item->logoCall}}"></i>
                                <h3>{{$item->titreCall}}</h3>
                                <p>{{$item->contentCall1}}<br>{{$item->contentCall2}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    @foreach ($contact as $item)
                        <div class="text-center"><button type="submit">{{$item->boutton}}</button></div>   
                    @endforeach
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
