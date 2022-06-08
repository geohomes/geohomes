  @include('layout.header')
<title>GeoHomes | Shop</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>

<!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="https://render-vision.com/wp-content/uploads/2021/02/architekturvisualisierung_hof_niederstein_quartier_1-1083x609.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Shop</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

    <!-- Our Estates -->
    <div class="categories-area section-padding40">
            <div class="container">
                <div class="row">
                 @if(empty($portifolio))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Content Available Yet.</strong>
                      </div>
                     


                     @else
                      @foreach($portifolio as $row)
                <div class="col-lg-6">
                    <div class="single-man-slider">
                       <div class="man-slider-active">
                        <div class="single-mam-img ">
                        <img id="current_change" class="gallery-img  img-responsive img-fluid w-100 img-thumbnail mb-40" src="{{ asset('assets/upload/portifolio_images/'.$row->first_image) }}" style="height:410px !important; object-fit: center;"> </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="text" >
                       <div class="section-tittle  ">
                        <h2 >{{$row->first_title}}</h2>
                      </div>
                        <p>{{$row->first_description}}</p>
                       
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse mt70">
                <div class="col-lg-6">
                    <div class="single-man-slider">
                       <div class="man-slider-active">
                        <div class="single-mam-img">
                        <img id="current_change" class="gallery-img img-responsive img-fluid w-100 img-thumbnail mb-40" src="{{ asset('assets/upload/portifolio_images/'.$row->second_image) }}" style="height:410px !important; object-fit: center;"> </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-6">
                    <div class="text ">
                      <div class="section-tittle mt-50">
                        <h2>{{$row->second_title}}</h2>
                      </div>
                        <p>{{$row->second_description}}</p>
                    </div>
                </div>
            </div>
            <div class="row mt70 ">
                <div class="col-lg-6">
                     <div class="single-man-slider">
                       <div class="man-slider-active">
                        <div class="single-mam-img ">
                        <img class="gallery-img  img-responsive img-fluid w-100 img-thumbnail" src="{{ asset('assets/upload/portifolio_images/'.$row->third_image) }}" style="height:410px !important; object-fit: center;"> </div>
                       </div> 
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="text mb-40">
                      <div class="section-tittle mt-50 mb-0">
                        <h2>{{$row->third_title}}</h2>
                      </div>
                        <p>{{$row->third_description}}</p>
                       
                    </div>
                </div>
            </div>


            </div>
            <div class="col-lg-12">
                        <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        
                                    {{$portifolio->links('vendor.pagination.default') }}
                                    
                                   </li>
                                </ul>
                            </nav>
                           
                        </div>
        </div>

    </div>
    @endforeach
       @endif
    <!-- Our Estates End -->

      @include('layout.footer')

</body>

</html>
