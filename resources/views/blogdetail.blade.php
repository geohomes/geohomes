    @include('layout.header')
<title>GeoHomes | Blog Detail</title>
</head>

<body>


    <!-- Header -->
      @include('layout.navbar')
    </header>
      <!--? Blog Area Start -->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
                @if(empty($blogdetail))
                      <div class="alert alert-warning col-lg-12 text-center">
                        <strong>No Blog Available Yet.</strong>
                      </div>
                     @else
                      @foreach($blogdetail as $row)
               <div class="posts-list">
                  <div class="single-post">
                     <div class="row">
                     <div class="col-lg-6">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('assets/upload/blog_images/'.$row->image) }}" alt="blog image">
                     </div>
                     <div class="blog_details">
                        <h2 style="color: #2d2d2d;">{{$row->title}}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                           <li><a href="#"><i class="fa fa-user"></i>writer: {{$row->writer}}</a></li>
                        </ul>
                     </div>
                  </div>
                     <div class="col-lg-6 mb-40">
                        <div class="quote-wrapper">
                        <p class="excert">
                           {{$row->description}}
                        </p>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
                  @endforeach
                  @endif
                  
                     @foreach($blogs as $row)
                    <div class="col-lg-3 mb-5 mb-lg-0 mt-40">
                        <div class="blog_left_sidebar">
                        <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('assets/upload/blog_images/'.$row->image) }}" alt="blog image" style="border-radius: 40px 40px 0px 0px !important;">
                                </div>
                                <div class="blog_details" style="background-color: #F5F9FB; border-radius: 0px 0px 40px 40px !important;">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{Str::limit($row->title,10)}}</h2>
        
                                    <a class="d-inline-block" href="blogdetail/{{$row->id}}">
                                    <p><u>{{Str::limit($row->description, 20) }}</u></p></a>
                                </div>
                     </article>
                  </div>
               </div>
                      @endforeach
                  
               
              
               
            </div>
             <div class="d-flex mt-40">
                        <a class="btn btn-danger" href="javascript:history.go(-1)">Back</a>
                     </div>
         </div>
      </section>
      <!-- Blog Area End -->

   @include('layout.footer')

</body>

</html>
