     @include('layout.header')
<title>GeoHomes | Consultancy</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/luxery/consultancy.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Consultancy</h2>
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
                    @if(empty($consultancy))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Content Available Yet.</strong>
                      </div>
                     

                     @else
                      @foreach($consultancy as $row)
                    <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6">
                        <div class="about-caption">
                            <div class="section-tittle mt-10 mb-0">
                                <h2>{{$row->title}}</h2>
                            </div>
                            <p class="mb-0">{{$row->firstdescription}}</p>
                          
                            </div>
                    </div>
                    <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6">
                        <div class="singel-details-img mt-40">
                            <img src="{{ asset('assets/upload/consultancy_images/'.$row->firstimage) }} " class="img-responsive img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6">
                        <div class="singel-details-img mt-40">
                            <img src="{{asset('assets/upload/consultancy_images/'.$row->secondimage) }}"  class="img-responsive img-fluid w-100"alt="">
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-xl-6 col-lg-6 col-md-6">
                        <div class="about-caption  mt-40">
                            <p>{{$row->seconddescription}}</p>
                            </div>
                             <a href="{{route('consultants-form')}}" class="btn hero-btn mt-20" style="background:#0EA15F;" >Get a consultants form <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                
                </div>
                <div class="col-lg-12 mt-40">
                        <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        
                                    {{ $consultancy->links('vendor.pagination.default') }}
                                    
                                   </li>
                                </ul>
                            </nav>
                           
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
