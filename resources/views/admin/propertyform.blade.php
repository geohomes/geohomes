@include('updatelayout.header')
<link rel="stylesheet" type="text/css" href="../assets/css/style.css"> 
<title>GeoHomes | Property Search</title>
</head>

<body>

    <!-- Property Search Request Form starts here -->


        <div class="container">
                 <div class="row">
                    <div class="col-12 mt-30 padding-40">
                        <h2 class="contact-title mt-30 padding-40" style="color:black">PROPERTY SEARCH REQUEST (PSR) FORM</h2>
                    </div>
                  </div>

                          <!-- it gives feedback messages -->
                                      @if($message = Session::get('success'))
                                      <div class="alert alert-success col-lg-4">
                                        <p style="color:black;">{{$message}}</p>
                                      </div>
                                      @endif

                                      @if($message = Session::get('error'))
                                      <div class="alert alert-danger">
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
                                        <input class="form-control valid" name="phone" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Line'" placeholder="Mobile Line">
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
                                       <input class="form-control valid" name="residential_address" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Residential Address '" placeholder="Residential Address">
                                       <small class="text-danger">{{$errors->first('residential_address') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="office_address" id="office_address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'office address'" placeholder="Office Address">
                                       <small class="text-danger">{{$errors->first('office_address') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <input class="form-control valid" name="plot_number" id="plot_number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'plot number'" placeholder="Plot Number">
                                       <small class="text-danger">{{$errors->first('plot_number') }}</small>
                                    </div>
                                </div>
                                    
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                       <select name="location" id="select2">
                                      <option value="Divine City">Divine City layout</option>
                                      <option value="Beloved">Beloved layout</option>
                                       <option value="Golden Gate" >Golden Gate</option>
                                         <option value="Precious">Precious</option>
                                        <option value="Monic " >Monic</option>
                                        <option value="Valley of Life" >Valley of Life</option>
                                         <option value="Destiny" >Destiny</option>
                                        <option value="Christa City" >Christa City</option>
                                        <option value="blue lake" >Blue lake</option>
                                         <option value="peace" >Peace</option>
                                        <option value="Agu bite" >Agu Bite</option>
                                            </select>
                                            <small class="text-danger">{{$errors->first('location') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                    <input class="form-control valid" name="inspection_date" id="inspection_date" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'date'" placeholder="Inspection Date" >
                                    <small class="text-danger">{{$errors->first('inspection_date') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-6 col-lg-4 ">
                                    <div class="form-group">
                                    <input class="form-control valid" name="approved_by" id="approved_by" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'approved by'" placeholder="Approved By" >
                                    <small class="text-danger">{{$errors->first('approved_by') }}</small>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-lg-4">
                                    <div class="form-group">
                                       <input class="form-control valid" name="customer" id="customere" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buyer/Agent/proxy'" placeholder="Buyer/Agent/proxy">
                                       <small class="text-danger">{{$errors->first('customer') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="form-group">
                                       <input class="form-control valid" name="survey_payment" id="payment_survey" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cash / Bank / Not Paid'" placeholder="Cash / Bank / Not Paid">
                                       <small class="text-danger">{{$errors->first('survey_payment') }}</small>
                                    </div>
                                </div>
                                    
                                <div class="col-sm-6 col-lg-4">
                                    <div class="form-group">
                                       <input class="form-control valid" name="payment_status" id="payment_status" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cash / Bank / Not Paid'" placeholder="Cash / Bank / Not Paid">
                                       <small class="text-danger">{{$errors->first('payment_status') }}</small>
                                    </div>
                                </div>
                           <div class="col-sm-6 col-lg-4 submit-info mb-40">
                             <button class="submit-btn2" type="submit" style="background-color:#0EA15F; margin-left:none; border-radius: 5px;">Submit</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@include('updatelayout.footer')
  </body>
</html>