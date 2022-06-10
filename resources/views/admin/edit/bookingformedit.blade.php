        @include('./updatelayout.header')
     <link rel="stylesheet" type="text/css" href="../../admin/css/style.css">
<title>GeoHomes | Update Application</title>
</head>

<body>
   @include('./updatelayout.navbar')
             <!-- booking Form starts here -->
                  <div class="container">
                 <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:#0EA15F">Update Client Booking Information</h2>
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

                        <form class="form-contact contact_form" action="#" method="POST" novalidate="novalidate">
                            <div class="row">
                               @foreach($booking as $row)
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                                <input class="form-control valid" name="firstname" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="{{$row['firstname']}}">
                                        <small class="text-danger">{{$errors->first('name') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                     <div class="form-group">
                                        <input class="form-control valid" name="middlename" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="{{$row['middlename']}}">
                                        <small class="text-danger">{{$errors->first('middlename') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-lg-6">
                                     <div class="form-group">
                                        <input class="form-control valid" name="surname" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="{{$row['surname']}}">
                                        <small class="text-danger">{{$errors->first('surname') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="{{$row['email']}}">
                                       <small class="text-danger">{{$errors->first('email') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="{{$row['phone']}}">
                                       <small class="text-danger">{{$errors->first('phone') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="residential" id="residential" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Residential address'" placeholder="{{$row['residential_address']}}">
                                       <small class="text-danger">{{$errors->first('residential') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="office" id="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Office address'" placeholder="{{$row['office_address']}}">
                                       <small class="text-danger">{{$errors->first('office') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="desired_service" id="service" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Desired Service address'" placeholder="{{$row['desired_service']}}">
                                       <small class="text-danger">{{$errors->first('desired_service') }}</small>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$row['id']}}">
                           <div class="col-sm-6 col-lg-6 submit-info mb-40">
                             <button class="btn btn-success" type="submit" style="background-color:#0EA15F; margin-left:none">Update</button>
                              </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        </div>
        <!-- Contact Area End -->
                       <!-- <center>
                        <div class="container">
                        <div class="form-wrapper mt-50">
                            <form id="contact-form" action="#" method="POST">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12">
                                        
                                        

                                        <p class="contact-title mt-20 padding-10" style="color:black">Kindly, fill the form to book your desired service.</p>
                                       </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-box user-icon mb-10">
                                            <input type="text" name="name" placeholder="Your Name" required="name" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="middlename" placeholder="Middle Name" required="middlename" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="surname" placeholder="Surname" required="surname" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="tel" name="phone" placeholder="Mobile Number" required="phone" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="email" placeholder="Email" required="email" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="residential" placeholder="Residential Address" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="office" placeholder="Office Address" >
                                        </div>
                                        <div class="form-box email-icon mb-10">
                                            <input type="text" name="desired-service" placeholder="Desired Service" required="desired-service">
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-lg-12 submit-info mb-45 ml-0">
                                 <button class="submit-btn2" type="submit" style="background-color:#0EA10F; width:50%;">Submit Form</button>
                              </div>
                            </form> 
                        </div>
                    </div>
                </center>

 booking Form End -->
 @include('./updatelayout.footer')
    </body>

</html>