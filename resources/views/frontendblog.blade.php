    @include('layout.header')
<title>GeoHomes | Blog</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>

      <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/hero/hero7.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                   
                   @if(empty($blog))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Blog Available Yet.</strong>
                      </div>
                     @else
                      @foreach($blog as $row)
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('assets/upload/blog_images/'.$row->image) }}" alt="">
                                    <a href="#" class="blog_item_date" style="background-color:#0EA15F;">
                                        <p>{{$row->created_at}}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="#">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{$row->title}}</h2>
                                    </a>
                                    <p>{{ Str::limit($row->description}},50)}}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        
                                    {{ $array->links('vendor.pagination.default') }}
                                    
                                   </li>
                                </ul>
                            </nav>
                           
                        </div>
                    </section>
                    @endforeach
                    @endif
                    
                    

        <!-- Blog Area End -->
    </main>

    @include('layout.footer')

</body>
</php>