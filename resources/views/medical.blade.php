     @include('layout.header')
<title>GeoHomes | Medical Services</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/featured/medical03.jpg" style="opacity: 0.6;">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Medical Services</h2>
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
                     @if(empty($medical))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Content Available Yet.</strong>
                      </div>
                     

                     @else
                      @foreach($medical as $row)
                    <div class="col-sm-12 col-xl-6 col-lg-6 col-md-12">
                        <div class="about-caption">
                            <div class="section-tittle mt-10 mb-0">
                                <h2>{{$row->title}}</h2>
                            </div>
                            <p class="mb-0">{{$row->description}}</p>
                          
                            </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-12 ">
                        <div class="mt-40">
                            <img src="{{ asset('assets/upload/medical_images/'.$row->image) }}" class="img-responsive img-fluid w-100" alt="" >
                        </div>
                    </div>
                </div>
            <!-- Pagination -->
             <div class="col-lg-12 mt-40">
                        <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        
                                    {{ $medical->links('vendor.pagination.default') }}
                                    
                                   </li>
                                </ul>
                            </nav>
                        </div>
            <!--End of Pagination -->
                 @endforeach
                @endif
                </div>
                </div>
                 </div>
                </div>
                
              
        <!-- cat End -->
    <!-- Construction End -->
     @include('layout.footer')

</body>

</html>
