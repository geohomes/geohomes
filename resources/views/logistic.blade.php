     @include('layout.header')
<title>GeoHomes | Logistic</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/featured/logistic.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Logistic</h2>
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
                     @if(empty($logistic))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Content Available Yet.</strong>
                      </div>
                     


                     @else
                      @foreach($logistic as $row)
          
                    <div class="col-sm-12 col-xl-6 col-lg-6 col-md-12">
                        <div class="singel-details-img mt-40">
                            <img src="{{ asset('assets/upload/logistic_images/'.$row->first_image) }}" class="img-responsive img-fluid w-100" alt="" >
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6 col-lg-6 col-md-12">
                        <div class="about-caption">
                            <div class="section-tittle mt-50 mb-0">
                                <h2>{{$row->title}}</h2>
                            </div>
                            <p class="mb-0">{{$row->description}}</p>
                          
                     </div>
                    </div>

                </div>
                </div>
            	</div>
                <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="singel-details-img mt-40 ">
                            <img src="{{ asset('assets/upload/logistic_images/'.$row->second_image) }}" class="img-responsive img-fluid w-100" alt="">
                        </div>
                    </div>
                    
                    <div class="col-sm-12  col-lg-6 col-md-6">
                        <div class="singel-details-img mt-40">
                            <img src="{{ asset('assets/upload/logistic_images/'.$row->third_image) }}" class="img-responsive img-fluid w-100" alt="" >
                        </div>
                    </div>
                
                </div>
                </div>

                 <!-- Pagination -->
                    <div class="col-lg-12 mt-40">
                        <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        
                                    {{ $logistic->links('vendor.pagination.default') }}
                                    
                                   </li>
                                </ul>
                            </nav>
                        </div>
            <!--End of Pagination -->
                @endforeach
                @endif
                 </div>
                </div>
                
              
        <!-- cat End -->
    <!-- Construction End -->
     @include('layout.footer')

</body>

</html>
