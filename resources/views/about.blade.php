 @include('layout.header')
<title>GeoHomes | About Us</title>
</head>

<body>


    <!-- Header -->
      @include('layout.navbar')
    </header>
  <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/materials/aboutus.jpg" >
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2 style="color: black;">About US</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
     <!--? About 1 Start-->
        <section class="about-low-area section-padding40">
            <div class="container">
                <div class="row justify-content-between">
                     @if(empty($about))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Content Available Yet.</strong>
                      </div>
                     

                     @else
                      @foreach($about as $row)
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span class="element" style="background-color:#0EA15F;">About Us</span>
                                <h2>{{$row->title}}</h2>
                            </div>
                            <p>{{$row->description}}</p>
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
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->

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
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat">
                            <div class="cat-cap">
                                <h5><a href="#" style="color:#0EA15F;">Reliablity</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat">
                            <div class="cat-cap">
                                <h5><a href="#" style="color:#0EA15F;">Experience</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
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
        
         <!-- Contact form Start -->
        <div class="contact-form testimonial-area section-padding40 mb-40" id="old_testimony">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span class="element"  style="background-color: #0EA15F!important">Testimonial</span>
                            <h2>Some amazing words from our clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters" id="testimony_change">
                    <div class="col-lg-6 col-md-12">
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p style="color:black !important">"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through.</p>
                                    <div class="rattiong-caption">
                                        <span>- Micky Mouse,<span>Business Man</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p style="color:black !important">"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering through.</p>
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
                                    <img src="/assets/img/gallery/man1.png" alt="">
                                </div>
                                <div class="single-mam-img">
                                    <img src="/assets/img/gallery/man1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
    

               <!--? Blog Area Start -->
        <section class="home-blog-area pb-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="section-tittle mb-100">
                            <span class="element" style="background-color:#0EA15F;">From News</span>
                            <h2>News & Media center</h2>
                            <p>We collect and analyze information about your general usage of the website products services and courses.</p>
                            <a href="blog_details.html" class="all-btn" style="color:#0EA15F;">View All</a>
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
                                    <h3><a href="blog_details.html">We might track your usage patterns to see</a></h3>
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
                                    <h3><a href="blog_details.html">The massive stadium screens at the MCG</a></h3>
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

var timer=setInterval(changeImage,3000);
    timer();
function stop(){
    clearInterval(timer);
}
/*experience image changing code */
        </script>
    <!-- About Section 01 End -->
 @include('layout.footer')

</body>

</html>