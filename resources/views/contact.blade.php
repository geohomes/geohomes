   @include('layout.header')
<title>GeoHomes | Contact</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
 <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/materials/contact.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
         <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Get in Touch</h2>
                    </div>
                    <div class="col-lg-6">

                          <!-- it gives feedback messages -->
                                      @if($message = Session::get('success'))
                                      <div class="alert">
                                        <p style="color:#0EA10F;">{{$message}}</p>
                                      </div>
                                      @endif

                                      @if($message = Session::get('error'))
                                      <div class="alert">
                                        <p style="color:red;">{{$message}}</p>
                                      </div>
                                      @endif
                                      <!-- feedback message ends here -->

                        <form class="form-contact contact_form" action="{{route('contact')}}" method="post" novalidate="novalidate">
                            <div class="row">
                               
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                        <small class="text-danger">{{$errors->first('name') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                        <small class="text-danger">{{$errors->first('email') }}</small>
                                    </div>
                                </div>
                                 <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                        <small class="text-danger">{{$errors->first('message') }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h4>Head Office</h4>
                                <h3>Suit E01b, The Statement Complex,</h3>
                                <p>plot 1002 first Ave, Wuse, Abuja.</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>ABUJA</h3>
                                <p>+234 806 0545 860</p>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@geohomesgroup.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h4>Branch Office</h4>
                                <h3>26 Moorehouse Street Ogui,</h3>
                                <p>Enugu, Enugu State.</p>
                            </div>
                        </div>
                          <div class="media contact-info mt-70">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body ">
                                <h3>ENUGU</h3>
                                <p>+234 906 2972 785</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <!-- Contact Area End -->
    </main>
    <!-- Contact End -->

     @include('layout.footer')

</body>

</html>