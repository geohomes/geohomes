     @include('./updatelayout.header')
     <link rel="stylesheet" type="text/css" href="../../admin/css/style.css">
<title>GeoHomes | Update Application</title>
</head>

<body>
   @include('./updatelayout.navbar')
    </header>
        <!-- booking Form starts here -->
               
                   <div class="container">
                    
                     
                          
                     <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-40 padding-40" style="color:black;">Update Applicant Information</h2>
                    </div>
                  </div>
                         <!-- it gives feedback messages -->
                                      @if($message = Session::get('success'))
                                      <div class="alert">
                                        <p style="color:#0EA10F; font-weight: bold;">{{$message}}</p>
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
                                @foreach($application as $row)
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" placeholder="{{$row['name']}}">
                                         <small class="text-danger">{{$errors->first('name') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                     <div class="form-group">
                                        <input class="form-control valid" name="surname" id="surname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Surname'" placeholder="{{$row['surname']}}">
                                        <small class="text-danger">{{$errors->first('surname') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-lg-6">
                                     <div class="form-group">
                                <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Line'" placeholder="{{$row['phone']}}">
                                <small class="text-danger">{{$errors->first('phone') }}</small>
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
                                       <input class="form-control valid" name="date_of_birth" id="date_of_birth" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'date of birth'" placeholder="{{$row['DOB']}}">
                                       <small class="text-danger">{{$errors->first('date_of_birth') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="gender" id="gender" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'gender'" placeholder="{{$row['gender']}}">
                                        <small class="text-danger">{{$errors->first('gender') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="marital_status" id="marital_status" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Marital Status'" placeholder="{{$row['marital_status']}}">
                                       <small class="text-danger">{{$errors->first('marital_status') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="state" id="state" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'state'" placeholder="{{$row['state']}}">
                                       <small class="text-danger">{{$errors->first('state') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                    <input class="form-control valid" name="country" id="country" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'country'" placeholder="{{$row['country']}}">
                                    <small class="text-danger">{{$errors->first('country') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="residential" id="residential" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'residential'" placeholder="{{$row['residential_address']}}">
                                       <small class="text-danger">{{$errors->first('residential') }}</small>
                                    </div>
                                </div>
                                   <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="local_government_area" id="local_government_area" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'local government area'" placeholder="{{$row['LGA']}}">
                                       <small class="text-danger">{{$errors->first('local_government_area') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="organization" id="organization" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'organization'" placeholder="{{$row['organisation']}}">
                                       <small class="text-danger">{{$errors->first('organization') }}</small>
                                    </div>
                                </div>
                                   <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="office_address" id="country" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'office address'" placeholder="{{$row['office_address']}}">
                                       <small class="text-danger">{{$errors->first('office_address') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="property_type" id="service" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'property type'" placeholder="{{$row['property_type']}}">
                                       <small class="text-danger">{{$errors->first('property_type') }}</small>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$row['id']}}">
                           <div class="col-sm-6 col-lg-12 submit-info mb-40">
                             <button class="btn btn-success" type="submit" style="background-color:#0EA15F; margin-left:none; border-radius: 10px;">Update</button>
                              </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
      

   @include('updatelayout.footer')
</body>
</html>