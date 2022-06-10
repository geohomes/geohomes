@include('./updatelayout.header')
     <link rel="stylesheet" type="text/css" href="../../admin/css/style.css">
<title>GeoHomes | Update Construction</title>
</head>

<body>
   @include('./updatelayout.navbar')
    </header>
 <div class="container-fluid py-4">
      <div class="row">
              @if(isset(Auth::user()->email))
         @else
          <script>window.location="login"</script>
         @endif
         <div class="container">
         <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Update Construction page</h2>
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
                        <form class="form-contact contact_form" action="#" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                          
                            <div class="row">
                               @foreach($construction as $row)
                                  <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="title" id="title" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload first Image'" placeholder="{{$row['title']}}">
                                         <small class="text-danger">{{$errors->first('title') }}</small>
                                    </div>
                                </div>
                                 <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="description" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder=" {{$row['description']}}"></textarea>
                                          <small class="text-danger">{{$errors->first('description') }}</small>
                                    </div>
                                </div>
                    
                                <div class="col-sm-6">
                                       <label>First Image</label>
                                    <div class="form-group">
                                        <input required="" class="form-control valid" name="firstimage" id="email" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Title'" placeholder="Title">
                                          <small class="text-danger">{{$errors->first('first_image') }}</small>
                                    </div>
                                </div>

                                  <div class="col-sm-6">
                                    <label>Second Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="secondimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="Upload Second image">
                                        <small class="text-danger">{{$errors->first('second_image') }}</small>
                                    </div>
                                </div>
                              <input type="hidden" value="{{$row['id']}}" name="id">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-sucess" style="background-color: #0EA15F; color: black;">Update</button>
                            </div>
                        </form>
                        @endforeach
  </main>
  
   @include('./updatelayout.footer');
</body>
</html>