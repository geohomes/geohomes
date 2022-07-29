 @include('updatelayout.header')
     <link rel="stylesheet" type="text/css" href="../../admin/css/style.css">
<title>GeoHomes | Add Blog</title>
</head>

<body>
   @include('updatelayout.navbar')   
         <div class="container">
         <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Create Your Post</h2>
                    </div>
                       <!-- it gives feedback messages -->
                                      @if($message = Session::get('success'))
                                      <div class="alert">
                                        <p style="color:#0EA10F;">{{$message}}</p>
                                      </div>
                                      @endif

                                      @if($message = Session::get('error'))
                                      <div class="alert">
                                        <p style="color:red;">{{$message}}</p>
                                      </div>
                                      @endif
                                      <!-- feedback message ends here -->
                    <div class="col-lg-6">
                        <form class="form-contact contact_form" action="#" method="POSt" enctype="multipart/form-data" novalidate="novalidate">
                          
                            <div class="row">
                               
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="name" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Writer`s Name">
                                        <small class="text-danger">{{$errors->first('name') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                        <small class="text-danger">{{$errors->first('email') }}</small>
                                    </div>
                                </div>
                                      <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="blog_title" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Blog Title">
                                    </div>
                                    <small class="text-danger">{{$errors->first('blog_title') }}</small>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="image" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Upload image">
                                        <small class="text-danger">{{$errors->first('title') }}</small>
                                    </div>
                                </div>
                                 <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="description" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Blog Description'" placeholder=" Enter Message"></textarea>
                                        <small class="text-danger">{{$errors->first('description') }}</small>
                                    </div>
                                </div>
                                  
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-outline-success button-contactForm boxed-btn">Post</button>
                            </div>
                        </form>
  </main>
  
   @include('updatelayout.footer');
</body>
</html>