 @include('updatelayout.header')
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<title>GeoHomes | Consultants Form</title>
</head>

<body>
     <!-- Consultants Form starts here -->

     <div class="container">
                 <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:black">Consultant Form</h2>
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
                               
                               <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                        <small class="text-danger">{{$errors->first('name') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                        <input class="form-control valid" name="middlename" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your middlename'" placeholder="Enter your middlename">
                                        <small class="text-danger">{{$errors->first('middlename') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                        <input class="form-control valid" name="surname" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your surname'" placeholder="Enter your surname">
                                        <small class="text-danger">{{$errors->first('surname') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                     <div class="form-group">
                                        <input class="form-control valid" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Line'" placeholder="Mobile Line">
                                        <small class="text-danger">{{$errors->first('phone') }}</small>
                                    </div>
                                </div>
                                 
                              
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                       <small class="text-danger">{{$errors->first('email') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="residential" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Residential Address '" placeholder="Residential Address">
                                       <small class="text-danger">{{$errors->first('residential') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="office" id="office" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Office Address'" placeholder="Office Address">
                                       <small class="text-danger">{{$errors->first('office') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="kin-name" id="Next of Kin`s FullName" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Next of Kin`s FullName'" placeholder="Next of Kin`s FullName">
                                       <small class="text-danger">{{$errors->first('kin-name') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="kin-address" id="kin-address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'kin address'" placeholder="Next of Kin`s Address">
                                       <small class="text-danger">{{$errors->first('kin-address') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="kin-relation" id="kin-relation" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'kin relation'" placeholder="Relation With Next of Kin">
                                       <small class="text-danger">{{$errors->first('kin-relation') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="prepared-who" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prepared By'" placeholder="Prepared By" >
                                       <small class="text-danger">{{$errors->first('prepared-who') }}</small>
                                    </div>
                                </div>
                                 
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="account-name" id="account-name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'account name'" placeholder="Account Name" >
                                       <small class="text-danger">{{$errors->first('account-name') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="account-number" id="account-number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'account number'" placeholder="Account Number" maxlength="10" minlength="10">
                                       <small class="text-danger">{{$errors->first('account-number') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="bank" id="bank" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'BanK'" placeholder="Bank " >
                                       <small class="text-danger">{{$errors->first('bank') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="company-line" id="company-line" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'company line'" placeholder="Company Mobile line" >
                                       <small class="text-danger">{{$errors->first('company-line') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="company-email" id="company-email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'company email'" placeholder="Company Email">
                                       <small class="text-danger">{{$errors->first('company-email') }}</small>
                                    </div>
                                </div>
                           <div class="col-sm-6 col-lg-8 submit-info mb-40">
                             <button class="submit-btn2" type="submit" style="background-color:#0EA15F; margin-left:none; border-radius: 5px;">Submit</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
                        <!-- contact-form
                        <center>
                        <div class="container">
                        <div class="form-wrapper mt-50">
                            <form id="contact-form" action="#" method="POST">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12">
                                          it gives feedback messages
                                      @if($message = Session::get('success'))
                                      <div class="alert alert-success">
                                        <p style="color:#0EA10F;">{{$message}}</p>
                                      </div>
                                      @endif

                                      @if($message = Session::get('error'))
                                      <div class="alert alert-danger">
                                        <p style="color:red;">{{$message}}</p>
                                      </div>
                                      @endif
                                       feedback message ends here 
                                        <p class="contact-title mt-20 padding-10" style="color:black">Kindly, fill the form with your Correct details.</p>
                                       </div>

                                         <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-box user-icon mb-0">
                                            <input type="text" name="name" placeholder="Your Name" required="name" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="middlename" placeholder="Middle Name" required="middlename" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="surname" placeholder="Surname" required="surname" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="tel" name="phone" placeholder="Mobile Number" required="phone" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="email" name="email" placeholder="Email" required="email" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="residential" placeholder="Residential Address" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="office" placeholder="Office Address" >
                                        </div>
                                          <div class="form-box user-icon mb-0">
                                            <p class="mt-0">Next of Kin`s Detail</p>
                                            <input type="text" name="kin-name" placeholder="Next of Kin`s FullName" required="kin-name" >
                                        </div>
                                        
                                    </div>

                                     <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="kin-address" placeholder="Next of kin`s Address" required="kin-address" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="kin-relation" placeholder="Relation With Next of Kin" required="kin-relation" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="prepared-who" placeholder="Prepared By Who?" required="prepared-who" >
                                        </div>
                                        <p>Account Detail</p>
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="account-name" placeholder="Account Name" required="account-name" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="account-number" placeholder="Account Number" required="account-number" maxlength="10" minlength="10">
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="text" name="bank" placeholder="Bank Detail" required="bank">
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="tel" name="company-line" placeholder="Company Mobile line" >
                                        </div>
                                        <div class="form-box email-icon mb-0">
                                            <input type="email" name="company-email" placeholder="Company Email" >
                                        </div>
                                    </div>
                                <div class="col-lg-12 submit-info mb-45 ml-0">
                                 <button class="submit-btn2" type="submit" style="background-color:#0EA10F; width:50%;">Submit Form</button>
                              </div>
                            </form> 
                        </div>
                    </div>
                </center>

    Consultants Form End -->
@include('updatelayout.footer')
    </body>

</html>