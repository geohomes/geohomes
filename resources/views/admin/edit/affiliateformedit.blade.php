    @include('./updatelayout.header')
     <link rel="stylesheet" type="text/css" href="../../admin/css/style.css">
<title>GeoHomes | Update Affiliate Form</title>
</head>

<body>
   @include('./updatelayout.navbar')
     <!-- Consultants Form starts here -->

     <div class="container">
                 <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Update Affiliate.</h2>
                    </div>
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

                    <form class="form-contact contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                @foreach($affiliate as $row)
                                <div class="col-sm-6 col-lg-8">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="{{$row['name']}}">
                                        <small class="text-danger">{{$errors->first('name') }}</small>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-8 ">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="{{$row['email']}}">
                                        <small class="text-danger">{{$errors->first('email') }}</small>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6  col-lg-8">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phone'" placeholder="{{$row['phone']}}">
                                        <small class="text-danger">{{$errors->first('phone') }}</small>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$row['id']}}">
                                 
                            <div class="form-group mt-3 col-lg-8 col-sm-6">
                                <button type="submit" class="btn btn-success" style="background:#0EA15F !important; color: black !important; border: none !important;">Submit</button>
                            </div>
                        </div>
                        </form>
                        @endforeach
                    </div>
                     @include('updatelayout.header')
                    </body>
                  </htm>