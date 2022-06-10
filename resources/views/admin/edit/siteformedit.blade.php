 @include('./updatelayout.header')
     <link rel="stylesheet" type="text/css" href="../../admin/css/style.css">
<title>GeoHomes | Update Site Inspection</title>
</head>

<body>
   @include('./updatelayout.navbar')
    </header>

          <div class="container">
                 <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title mt-30 padding-40" style="color:black">Update Site Inspection </h2>
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
                               @foreach($siteinspection as $row)
                                <div class="col-sm-6 col-lg-6">
                                     <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="{{$row['name']}}">
                                       <small class="text-danger">{{$errors->first('name') }}</small>
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
                                       <input class="form-control valid" name="residential" id="residential" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'residential'" placeholder="{{$row['residential_address']}}">
                                        <small class="text-danger">{{$errors->first('residential') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="submission_date" id="date" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'date'" placeholder="{{$row['submission_date']}}">
                                        <small class="text-danger">{{$errors->first('submission_date') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="plot_number" id="plot_number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'plot number'" placeholder="{{$row['plot_number']}}">
                                        <small class="text-danger">{{$errors->first('plot_number') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="layout" id="layout" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'layout'" placeholder="{{$row['layout']}}">
                                        <small class="text-danger">{{$errors->first('layout') }}</small>
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="customer" id="customere" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buyer/Agent/proxy'" placeholder="{{$row['person']}}">
                                        <small class="text-danger">{{$errors->first('customer') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="inspection_date" id="inspection_date" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Inspection date'" placeholder="{{$row['inspection_date']}}">
                                        <small class="text-danger">{{$errors->first('inspection_date') }}</small>
                                    </div>
                                </div>
                                    
                                   <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="survey_payment" id="payment_survey" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cash / Bank / Not Paid'" placeholder="{{$row['survey_payment']}}">
                                        <small class="text-danger">{{$errors->first('survey_payment') }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="payment_status" id="payment_status" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cash / Bank / Not Paid'" placeholder="{{$row['status']}}">
                                        <small class="text-danger">{{$errors->first('payment_status') }}</small>
                                    </div>
                                </div>
                                   
                                    
                                    <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                       <input class="form-control valid" name="approved_by" id="approved_by" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'approved by'" placeholder="{{$row['approved_by']}}">
                                        <small class="text-danger">{{$errors->first('approved_by') }}</small>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$row['id']}}">
                                   
                           <div class="col-sm-6 col-lg-4 submit-info mb-40">
                             <button class="btn btn-success" type="submit" style="background-color:#0EA15F; margin-left:none; border-radius: 10px;">Submit Form</button>
                              </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        </div>
       
     <!-- <center>
    <div class="container">
    <div class="form-wrapper mt-50">
   <form id="contact-form" action="#" method="POST">
    <div class="row">
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

        <p class="contact-title mt-20 padding-10 " style="color:black">Kindly fill the Form with correct details.</p>
        </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-box user-icon mb-0">
              <p>Client Name</p>
                <input type="text" name="name" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                <div class="validation"></div>
            </div> 
                
            
            <div class="form-box user-icon mb-0">
            <p>Phone number</p> 
              <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                      <div class="validation"></div>
            </div>

              <div class="form-box user-icon mb-0">
              <p>E-mail</p>
                <input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                      <div class="validation"></div>
                 </div> 
                 
               <div class="form-box user-icon mb-0">
              <p> Residential Address</p>
                <input type="text" name="residential" id="adresse" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
              </div>
                 <div class="form-box user-icon mb-0">
              <p> Date</p>
                <input type="date" name="date" id="adresse" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
              </div>
        
                   <div class="form-box user-icon mb-0">
                <p>Plot Number</p>
                 <input type="text" name="plot_number" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                 <div class="validation"></div>
                </div>
                  </div> 

                <div class="col-lg-6 col-md-6 col-sm-12">
                   <div class="form-box user-icon mb-0">
                  <p>layout/Location</p>
                    <input type="text" name="layout" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                  <div class="form-box user-icon mb-0">
                     <p>Buyer/Agent/proxy</p>
                    <input type="text" name="customer"  placeholder="Choose one" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." placeholder="choose one" />
                     <div class="validation"></div>
                  </div> 

                   <div class="form-box user-icon mb-0">
                  <p>Inspection Date</p>  
                    <input type="date" name="inspection_date" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                            <div class="validation"></div>
                  </div>
                    <div class="form-box user-icon mb-0">
                  <p>Survey payment</p>
                    <input type="text" name="payment_survey" id="adresse" data-rule="required" data-msg="please fill this filled" placeholder="Cash / Bank / Not Paid" />
                    <div class="validation"></div>
                  </div>

                    
                    <div class="form-box user-icon mb-0">
                  <p>Payment Status</p>
                    <input type="text" name="payment_status" id="fonction" data-rule="required" data-msg="please fill this filled" placeholder="Cash / Bank / Not Paid"/>
                    <div class="validation"></div>
                  </div>


                
                  <p> Approved BY</p>
                    <input type="text" name="approved_by" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                </div>
             <div class="col-lg-12 submit-info mb-45 ml-0">
              <button class="submit-btn2" type="submit" style="background-color:#0EA10F; width:80%;">Submit Form</button>
              </div>

            </form>
          </div>
        </div>
        </center>
                          
   Consultants Form End -->
        @include('./updatelayout.footer')
     </body>
</html>