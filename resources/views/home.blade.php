 @include('layout.header')
<title>GeoHomes</title>
</head>
<body>
    
     <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <!-- Header -->
      @include('layout.navbar')
    </header>

    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Exquisite Homes <span> With Premium Comfort</span>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Move to What Moves You.</p>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        <!-- slider Area End-->
        <!--? About 1 Start-->
        <section class="about-low-area section-padding40">
            <div class="container">
                   <!-- it gives feedback messages -->
                        @if($message = Session::get('success'))
                           <div class="alert">
                        <p style="color:#0EA15F;">{{$message}}</p>
                      </div>
                        @endif
                     @if($message = Session::get('error'))
                     <div class="alert">
                    <p style="color:red;">{{$message}}</p>
                      </div>
                      @endif
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span class="element" style="background-color:#0EA15F;">About Us</span>
                               <h2>Words About Us</h2>
                            </div>
                            <p> Geohomes is a firm of qualified, Experienced Estate Developers and Mangers, Civil Engineers.
                                The Company deals on constructions, Supply of Raw Materials, General Merchandise, and General Contracts.
                            <br> <br>

                            The Company has grown successfully executing and completing high profile jobs for public Agencies. Which is attributable to our team of professionals.</p>

                            <a href="{{route('about')}}" class="btn hero-btn mt-0" style="background:#0EA15F;" >Read More <i class="ti-arrow-right"></i></a>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="experience">
                                    <span style="color:#0EA15F;">454 m</span>
                                    <p>Delivery Packages</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="experience">
                                    <span style="color:#0EA15F;">127</span>
                                    <p>Countries Covered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-9 offset-md-1 offset-sm-1">
                        <div class="about-right-cap">
                            <div class="about-right-img">
                                <img id="image_change" src="/assets/img/materials/house02.jpg" alt="" onclick="stop();">
                            </div>
                            <div class="img-cap" style="background-color:#0EA15F;">
                                <span >20</span>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->
         <!--? Gallery Area Start -->
        <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-gallery text-center">
                            <a href="{{route('real-estate')}}">
                            <div class="gallery-img" style="background-image: url(/assets/img/featured/estate.jpg);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                     <h3>Real Estate</h3>
                                    <p>We leverage our breadth of asset classes, vertically integrated services, unique business
                                model, and in-house development and management expertise.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-gallery no-margin text-center">
                            <a href="{{route('constructions')}}">
                            <div class="gallery-img" style="background-image: url(/assets/img/featured/construction.jpg);"></div>
                            <div class="thumb-content-);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                   <h3>Construction</h3>
                                    <p>We leverage our breadth of asset classes, vertically integrated services, unique business
                                model, and in-house development and management expertise.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-gallery text-center">
                             <a href="{{route('energys')}}">
                            <div class="gallery-img" style="background-image: url(/assets/img/featured/energy.jpeg);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                   <h3>Energy</h3>
                                    <p>We leverage our breadth of asset classes, vertically integrated services, unique business
                                model, and in-house development and management expertise.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
         <div class="form-group mt-3 d-flex justify-content-center">
            <a href="{{route('services')}}">
                 <button type="submit" class="btn" style="background:#0EA15F !important;">View all Services</button></a>
                </div>
        <!-- Gallery Area End -->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding40 gray-bg">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-100">
                           <span class="element" style="background-color:#0EA15F;" >Features</span>
                            <h2>To increase productivity and cost effectiveness on the market.</h2>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat">
                            <div class="cat-cap">
                                <h5><a href="#" style="color:#0EA15F;">Quality</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-cat ">
                            <div class="cat-cap">
                                <h5><a href="#" style="color:#0EA15F;">Reliablity</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-cat">
                            <div class="cat-cap">
                                <h5><a href="#" style="color:#0EA15F;">Experience</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-cat">
                            <div class="cat-cap">
                                  <h5><a href="#" style="color:#0EA15F;">Manufacturing</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cat End -->
        <!-- Services Area start -->
        <div class="service-area section-bg" data-background="/assets/img/gallery/section_bg01.png">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-main position-relative">
                            <div class="single-wrapper active">
                               <div class="single-man-slider">
                       <div class="man-slider-active">
                        <div class="single-mam-img">
                        <img style="height: 400px;" class="gallery-img  w-100" src="/assets/img/currently-selling/sell01.jpg"> </div>
                        <div class="single-mam-img">
                        <img style="height: 400px;"  class="gallery-img  w-100" src="/assets/img/currently-selling/sell02.jpg"></div>
                        <div class="single-mam-img">
                        <img style="height: 400px;"  class="gallery-img  w-100" src="/assets/img/currently-selling/sell04.jpg"></div>
                        </div>
                         </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-main position-relative ">
                            <div class="single-wrapper">
                                 <div class="single-man-slider">
                       <div class="man-slider-active">
                        <div class="single-mam-img">
                        <img style="height: 400px;"  class="gallery-img  w-100" src="/assets/img/currently-selling/sell03.jpg"> </div>
                        <div class="single-mam-img">
                        <img style="height: 400px;"  class="gallery-img  w-100" src="/assets/img/currently-selling/sell05.jpg"></div>
                        <div class="single-mam-img">
                        <img style="height: 400px;"  class="gallery-img  w-100" src="/assets/img/currently-selling/sell07.jpg"></div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-main position-relative">
                            <div class="single-wrapper">
                                 <div class="single-man-slider">
                       <div class="man-slider-active">
                        <div class="single-mam-img">
                        <img style="height: 400px;"  class="gallery-img  w-100" src="/assets/img/currently-selling/sell08.jpg"></div>
                        <div class="single-mam-img">
                        <img style="height: 400px;"  class="gallery-img  w-100" src="/assets/img/currently-selling/sell09.jpg"></div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <!-- Services Area End -->
        <!-- Want To work -->
        <section class="wantToWork-area gray-bg ">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-10 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <p style="color: black;">The right candidate may exist, but talented people.We Bring Your Dreams To Reality</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
                <!-- Contact form Start -->
        <div class="contact-form testimonial-area section-padding40 mb-40">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span class="element" style="background-color:#0EA15F;">Testimonial</span>
                            <h2>Some amazing words from our clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12">
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through.</p>
                                    <div class="rattiong-caption">
                                        <span>- Micky Mouse,<span>Business Man</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through.</p>
                                    <div class="rattiong-caption">
                                        <span>- Micky Mouse,<span>Business Man</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- slider -->
                        <div class="single-man-slider">
                            <div class="man-slider-active">
                                <div class="single-mam-img">
                                    <img src="assets/img/gallery/man1.png" alt="">
                                </div>
                                <div class="single-mam-img">
                                    <img src="assets/img/gallery/man1.png" alt="">
                                </div>
                                <div class="single-mam-img">
                                    <img src="assets/img/gallery/man1.png" alt="">
                                </div>
                                <div class="single-mam-img">
                                    <img src="assets/img/gallery/man1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- galary -->
                        <div class="single-gallery">
                            <div class="gallery-img" style="background-image: url(assets/img/luxery/luxery2.png);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                    <h3><a href="#">Need to make<br> an enquiry?</a></h3>
                                    <p>We collect and analyze information about your general usage of the website products.</p>
                                    <a href="{{route('about')}}">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- contact-form -->
                        <div class="form-wrapper">
                            <div class="row ">
                                      <!-- feedback message ends here -->
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2 mb-30">
                                        <h2>Drop your message</h2>
                                    </div>
                                </div>
                            </div>

                            <form id="contactform" action="{{route('contact')}}" method="post">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-box user-icon mb-15">
                                            <input type="text" name="name" placeholder="Your Name" id="name">
                                            <span class="text-danger" id="nameError"></span>
                                            <small class="text-danger">{{$errors->first('name') }}</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-box email-icon mb-15">
                                            <input type="text" name="email" placeholder="Email" id="email">
                                            <span class="text-danger" id="emailError"></span>
                                            <small class="text-danger">{{$errors->first('email') }}</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-15">
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                            <span class="text-danger" id="messageError"></span>
                                            <small class="text-danger">{{$errors->first('message') }}</small>
                                        </div>
                                        <div class="submit-info">
                                            <button class="submit-btn2" type="submit" style="background-color:#0EA15F;" id="submit" name="submit">Send Message</button>
                                        </div>
                                    </div>
                                    

                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact form End -->
               <!--? Blog Area Start -->
        <section class="home-blog-area pb-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="section-tittle mb-100">
                            <span class="element" style="background-color:#0EA15F;">From News</span>
                            <h2>News & Media center</h2>
                            <p>We collect and analyze information about your general usage of the website products services and courses.</p>
                            <a href="{{ route('blogs') }}" class="all-btn" style="color:#0EA15F;">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home-blog1.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p>22 Apr 2020</p>
                                    <h3><a href="{{ route('blogs') }}">We might track your usage patterns to see</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home-blog2.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p>22 Apr 2020</p>
                                    <h3><a href="{{ route('blogs') }}">The massive stadium screens at the MCG</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->

   <script type="text/javascript">
    /* experience image changing code */
            var myImage = document.getElementById("image_change");

var imageArray = [
"/assets/img/materials/house02.jpg",
   "/assets/img/materials/house03.jpg",
   "/assets/img/materials/house04.jpg"              
                 ]

var imageIndex = 0;

function changeImage() {
  myImage.setAttribute("src",imageArray[imageIndex]);
  imageIndex++;
  if (imageIndex >= imageArray.length) {
    imageIndex = 0;
  }
}

var counter=setInterval(changeImage,3000);

function stop(){
    clearInterval(counter);
}
/*experience image changing code */
        </script>
         <!-- About Section 01 End -->\



 @include('layout.footer')

    
</body>

</html>