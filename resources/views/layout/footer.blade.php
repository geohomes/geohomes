        <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="map-responsive mt-2 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4685.4524824850705!2d7.49220912261883!3d9.06556817568892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a301634bc385%3A0x7c0e0c2767a0f6d!2sGeohomes%20Services%20Limited!5e0!3m2!1sen!2sng!4v1651144717487!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="map-responsive mt-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.646824983353!2d7.492906450671298!3d6.439381725898378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a3d8f51f6071%3A0x6b07f5ee68d7e660!2s26%20Moorehouse%20St%2C%20Ogui%20400001%2C%20Enugu!5e0!3m2!1sen!2sng!4v1651311872154!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>
        </div>
        </div>
        <!-- Map Area End -->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container ">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class=" footer-title">
                                    <img src="assets/img/logo/logo-main.png" alt="" style="width:250px; margin-left:-22px;">
                                    <p style="margin-right:20px; color: #57636e;">Geohomes is a firm of qualified, Experienced Estate Developers <br> and Mangers, Civil Engineers. </p>
                                <a href="{{route('about')}}" style="margin-right:20px; " class=" btn2 wantToWork-btn">Learn More <i class="ti-arrow-right"></i></a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Us</h4>
                                <div class="footer-pera">
                                    <p style="color: #57636e;">Mon- Fri: 9.00am - 6.00 pm</p>
                                    <p style="color: #57636e;">Sat: 9.00am - 4.00 pm</p>
                                </div>
                            </div>
                            <div class="footer-number">
                                <p style="color: #57636e;">Abuja: +234 806 0545 860</p>
                                <p style="color: #57636e;">Enugu: +234 906 2972 785</p>

                                <p style="color: #57636e;">Email: info@geohomesgroup.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="{{ route('real-estate') }}">Real Estate</a></li>
                                    <li><a href="{{ route('constructions') }}">Construction</a></li>
                                    <li><a href="{{route('energys')}}">Energy</a></li>
                                    <li><a href="{{route('logistics')}}">Logistic Services</a></li>
                                    <li><a href="{{ route('medicals') }}">Medical Services</a></li>
                                    <li><a href="{{ route('minerals') }}">Mineral Production</a></li>
                                    <li><a href="{{ route('agricultures') }}">Agriculture</a></li>
                                    <li><a href="{{ route('consultancy') }}">Consultancy</a></li>
                                    <li><a href="https://geoprecisegroup.com"  target="_blank">Land Surveying</a></li>
                                    <li><a href="https://bestpropertymarket.com/"  target="_blank">Best Property Market</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle mb-50">
                                <h4>Newsletter</h4>
                                <p>Subscribe our newsletter to get updates about our services</p>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form action="#" Method="POST" class="subscribe_form relative mail_part" novalidate="true">
                                    
                                        <input type="email" name="email" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                        <div class="form-icon">
                                            <button type="submit" style="background-color: #0EA15F;">
                                                Subscribe
                                            </button>
                                        </div>
                                        <!-- it gives feedback messages -->
                                   @if($message = Session::get('success'))
                                   <div class="alert ">
                                   <p style="color:#0EA10F;">{{$message}}</p>
                                    </div>
                                    @endif

                                    @if($message = Session::get('error'))
                                    <div class="alert ">
                                    <p style="color:red;">{{$message}}</p>
                                    </div>
                                    @endif
                                    <!-- feedback message ends here -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p> ©2022 Geohomes.com  | All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

   
    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/animated.headline.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
     <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>
    <!-- Jquery Plugins, main Jquery -->    
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>