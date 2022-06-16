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
                            <div class="hero-cap hero-cap2">
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
                   
                   @if(empty($blogs))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Blog Available Yet.</strong>
                      </div>
                     @else
                      @foreach($blogs as $row)
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('assets/upload/blog_images/'.$row->image) }}" alt="blog image" style="border-radius: 40px 40px 40px 40px !important;">
                                    <a href="#" class="blog_item_date" style="background-color:#0EA15F;">
                                        <p>{{ Carbon\Carbon::parse($row->updated_at)->diffForHumans() }}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{Str::limit($row->title,40)}}</h2>
        
                                    <a class="d-inline-block" href="blogdetail/{{$row->id}}">
                                    <p><u>{{Str::limit($row->description, 40) }}</u></p></a>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i>{{Str::limit($row->writer, 20) }}</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="col-lg-12">
                        <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        
                                    {{ $blogs->links('vendor.pagination.default') }}
                                    
                                   </li>
                                </ul>
                            </nav>
                           
                        </div>
                    </div>
                </div>
                </section>
            </main>
                    

    @include('layout.footer')

</body>
</php>