     @include('layout.header')
<title>GeoHomes | Energy</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/featured/energy.jpeg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Energy</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <div class="product-detals-header section-padding40">
            <div class="container">
                <div class="single-projects pt-50 pb-50">
                    <div class="row">
                         @if(empty($energy))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Content Available Yet.</strong>
                      </div>
                     

                     @else
                      @foreach($energy as $row)
                      <div class="section-tittle mt-10 mb-0 col-lg-12 col-sm-6">
                                <h2>{{$row->title}}</h2>
                                </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="singel-details mb-30">
                                 <p class="mb-0">{{$row->first_description}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="singel-details mb-30">
                                 <p class="mb-0">{{$row->second_description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-projects-img pt-50">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="singel-details-img mb-30">
                                <img src="{{ asset('assets/upload/energy_images/'.$row->first_image) }}" class="img-responsive img-fluid w-100"alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="singel-details-img mb-30">
                                <img src="{{ asset('assets/upload/energy_images/'.$row->second_image) }}" class="img-responsive img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-12 mt-40">
                        <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        
                                    {{ $energy->links('vendor.pagination.default') }}
                                    
                                   </li>
                                </ul>
                            </nav>
                           
                        </div>
                @endforeach
                @endif
            </div>
        </div>


        <!--? Categories Area Start -->
        <!--
        <div class="categories-area section-padding40">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xl-6 col-lg-6 col-md-12">
                        <div class="about-caption">
                            <div class="section-tittle mt-10 mb-0">
                                <h2>Geohomes Energy</h2>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatem beatae facilis fugit ut error aliquam, ducimus debitis quod similique. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique minima repudiandae commodi ex doloribus perferendis, eligendi, praesentium modi obcaecati repellendus sint voluptatem labore minus quis pariatur Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatem beatae facilis fugit ut error aliquam, ducimus debitis quod similique. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                          
                            </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-12 ">
                        <div class="mt-40">
                            <img src="assets/img/featured/energy05.jpg" class="img-responsive img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
                </div>
                </div>
                 </div>
                </div>
            -->
                
              
        <!-- cat End -->
    <!-- Construction End -->
     @include('layout.footer')

</body>

</html>
