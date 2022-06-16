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
              <div class="col-lg-6 col-sm-12 col-md-6">
                  <div class="card mb-40" style="border-radius: 40px; box-shadow: 20px black">
                  <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <img src="{{ asset('assets/upload/portifolio_images/'.$row->image) }}" class="img-fluid rounded-start h-100" alt="..." style="object-fit: center; border-radius: 40px 0px 0px 40px; border-color: gainsboro;">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.8em">{{$row->title }}</h5>
                        <p class="card-text" style="font-size: 1.2em">{{$row->product }}</p>
                        <div class="card-text">
                            <h3><u>Description</u></h3>
                            <p>{{Str::limit($row->features), 70 }}</p>
                        </div>
                      <div class="row mt-4">
                      <div class="col-lg-6 col-sm-6 col-md-6">
                     <small  style="font-size: 1.2em; color: black;">&#8358 {{$row->price}}</small>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 ">
                     <small class="text-muted"><i class="fa fa-map-marker  " aria-hidden="true" style="font-size: 1.2em">   {{$row->location }}</i></small>
                      </div>
                        </div>
                            </div>
                                </div> 
                            </div>
                         </div>
                        </div> 
                          @endforeach
                         @endif
                             </div>
                             <div class="col-lg-12 mt-40">
                              <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        
                                    {{ $portifolio->links('vendor.pagination.default') }}
                                    
                                   </li>
                                </ul>
                            </nav>
                           
                        </div>
                         </div>
                     </div>



       
    <!-- Our Estates End -->

      @include('layout.footer')

</body>

</html>
