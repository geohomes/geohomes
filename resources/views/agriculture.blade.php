     @include('layout.header')
<title>GeoHomes | Agriculture</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/featured/agriculture.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Agriculture</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding40">
            <div class="container">
                <div class="row">
                      @if(empty($agriculture))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Content Available Yet.</strong>
                      </div>
                     

                     @else
                      @foreach($agriculture as $row)
                     <div class="col-sm-12  col-lg-7 col-md-7 mt-10">
                        <div class="about-caption">
                            <div class="section-tittle mt-10 mb-0">
                                <h2>{{$row->title}}</h2>
                            </div>
                            <p class="mb-0">{{$row->description}}</p>
                          
                     </div>
                    </div>
          
                    <div class="col-sm-12 col-lg-5 col-md-5">
                        <div class="singel-details-img mt-40">
                            <img src="{{ asset('assets/upload/agriculture_images/'.$row->first_image) }}" class="img-responsive img-fluid w-100" alt="" >
                        </div>
                    </div>
                    <div class="col-sm-12  col-lg-12 col-md-12">
                        <div class="singel-details-img mt-40">
                            <img src="{{ asset('assets/upload/agriculture_images/'.$row->second_image) }}" class="img-responsive img-fluid w-100" alt="" >
                        </div>
                    </div>

                </div>
                </div>
                @endforeach
                @endif
                </div>
                 </div>
                </div>
                
              
        <!-- cat End -->
    <!-- Construction End -->
     @include('layout.footer')

</body>

</html>
