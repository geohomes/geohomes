@include('./updatelayout.header')
     <link rel="stylesheet" type="text/css" href="../../admin/css/style.css">
<title>GeoHomes | Update Estate Page</title>
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
                        <div class="col-lg-12">
                        <form class="form-contact contact_form" action="#" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                          
                            <div class="row">
                                @foreach($estate as $row)
                                  
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="titledescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Title Description'" placeholder="{{$row['titledescription']}}"></textarea>
                                        <small class="text-danger">{{$errors->first('titledescription') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control w-100" name="title" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Title'" placeholder="{{$row['title']}}">
                                        <small class="text-danger">{{$errors->first('title') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="firstdescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="{{$row['first_description']}}"></textarea>
                                        <small class="text-danger">{{$errors->first('firstdescription') }}</small>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <label>First Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="firstimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['first_image']}}">
                                        <small class="text-danger">{{$errors->first('firstimage') }}</small>
                                    </div>
                                </div>

                                 <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="seconddescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="{{$row['second_description']}} "></textarea>
                                        <small class="text-danger">{{$errors->first('seconddescription') }}</small>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <label>Second Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="secondimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['second_image']}}">
                                        <small class="text-danger">{{$errors->first('seconddescription') }}</small>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="thirddescription" id="message" cols="50" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="{{$row['third_description']}}"></textarea>
                                        <small class="text-danger">{{$errors->first('thirddescription') }}</small>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6">
                                    <label>Third Image</label>
                                    <div class="form-group">
                                        <input required=""class="form-control valid" name="thirdimage" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Second image'" placeholder="{{$row['third_image']}}">
                                        <small class="text-danger">{{$errors->first('thirdimage') }}</small>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$row['id']}}" name="id">
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success" style="background-color: #0EA15F; color: black;">Update</button>
                            </div>
                        </form>
                        @endforeach
  </main>
  
   @include('./updatelayout.footer');
</body>
</html>