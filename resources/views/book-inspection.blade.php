    @include('layout.header')
<title>GeoHomes | Book Inspection</title>
</head>

<body>


    <!-- Header -->
      @include('layout.navbar')
    </header>

  <!-- Global Banner -->
    <section class="global-banner">
       <img src="/assets/img/materials/book-inspection-banner.jpg" alt="">
        <h2 class="container">Book Inspection</h2>
    </section>
    <!-- Global Banner End -->
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mt-50">
                   <input type="text" name="" required="name"  placeholder="Name">
                   <input type="text" name="" id="surname" placeholder="Surname" required="">
                   <input type="text" name="" id="phone"  placeholder="Mobile Number" required="">
                   <input type="email" id="email" placeholder="Email" required="">
                  <input type="text" id="address" placeholder="Address" required="">
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="application-form">
                    <h3 class="second-title">Next of Kin Information</h3></div>

                  <input type="text" name="" id="next of kin" placeholder="Next of Kin full name" required="">
                  <input type="text" name="" id="next of kin" placeholder="Next of Kin`s Address" required="">
                  <input type="text" name="" id="next of kin" placeholder="Relation With Next of Kin" required="">
                  <input type="text" name="" id="next of kin" placeholder="Prepared By Who" required="">
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="application-form">
                    <h3 class="second-title">Account Detail</h3></div>
                    <input type="text" name="" placeholder="Account Name" required="">
                    <input type="text" name="" placeholder="Account Number" required="">
                    <input type="text" name="" placeholder="Bank detail" required="">
                    <input type="text" name="" placeholder="Corporate Organization (if Available)">
                    <input type="email" name="" placeholder="Company Email" required="">
                    <input type="email" name="" placeholder="Company Mobile Line" required="">
                  </div>
                  <div class="application-form mt-0 mb-0 col-sm-12 col-md-12 col-lg-9">
                    
                   <button type="submit" class="bouton-contact mb-5">Submit</button>

                  </div>
                </div>
              </div>
     
                            <div class="container">
                                <div class="d-flex justify-content-center" style="border: 10px; background-color: black; ">
                            <h3 style="color: white; font-size: 35px;">Terms and Conditions</h3>
                        </div>
                            <div class="row mb-5">
                                    <div class="col-sm-12 col-lg-6 mt-4" style="border:7px black solid; border-radius: 20px;">
                                        <u style="color: black"><h2 class="mt-4" style="color:  #0EA15F "> Agency Agreement</h2></u>
                                        This AGENCY AGREEMENT made between (Applying Agent) and KERAE HOMES LIMITED, a
                                        body registered under Part A of the Companies and Allied Matters Act, Cap C20,
                                        Laws of the Federation of Nigeria, and having its registered Office address at
                                        Km 36, Ero’s House, Duplex 2 Eputu, Lekki-Expressway, Lagos State. (Principal)
                                        on the other Part HEREBY APPOINTS (Agent) in accordance with the terms of this
                                        Agreement :
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mt-4" style="border:7px black solid; border-radius: 20px;">
                                        <u style="color: black"><h2 style="color:  #0EA15F " class="mt-4" >IDEMNIFICATION</h2></u>
                                        The Principal will not indemnify the agent or any third party for any loss or damage arising from the actions of the agent in course of any transaction on behalf of the Principal.

                                        <u style="color: black"><h2 style="color:  #0EA15F ">TERMINATION</h2></u>
                                        The Agent agreement will be terminated by the consent of both parties.
                                    </div>

                                        <div class="col-sm-12 col-lg-6 "style="border:7px black solid; border-radius: 20px;">
                                        <u style="color: black">
                                        <h2 style="color:  #0EA15F " class="mt-4" > AGENCY RELATIONSHIP AND DUTIES OF AGENT</h2></u>
             
                                        A. The agency relationship in respect of the property shall be a single agency,
                                        and shall perform his duties in person and cannot appoint a sub-agent to do what
                                        he was pointed to do. <br>
                                        B. The Agent must have notified the management in writing and signed the agency
                                        agreement before commencing any negotiations and sale on behalf of the
                                        management. <br>
                                        C. The management does not authorize the agent to collect the money paid by the
                                        client into his personal account; all such monies must be deposited directly
                                        into the authorized accounts of the management. <br>
                                        D. The Agent must act with the Principal’s best interests in mind: the agent
                                        cannot act in a way that would harm the Management or the company’s property
                                        <br>
                                        E. The Agent must exercise reasonable care and skill and keep confidential any
                                        information obtained while performing agency duties. <br>
                                        F. The Agent must disclose all material facts relating to the business at hand.
                                    </div>

                                    <div class="col-sm-12 col-lg-6 " style="border:7px black solid; border-radius: 20px;">
                                        <u style="color: black">
                                        <h2 style="color: #0EA15F" class="mt-4" >COMMISSION</h2></u>
                                        A. The Agent shall be paid a total of 10% of the proceeds from the sale of land,
                                        (such variance shall be dependent on if the Agent’s Client gets a discount) and
                                        5% (such variance shall be dependent on if the Agent’s Client gets a discount)
                                        for the sale of any Buildings. With respect to Buildings the commission shall be
                                        paid on the result after deduction of statutory fees. <br> <br>
                                        B. The above stated commission is subject to review upon an increase or 
                                        decrease. <br> <br>
                                        C. All cost incurred during the sale of the company’s Property by the Agent 
                                        shall be borne by the agent. All such cost includes but are not limited to
                                        transportation for site visitation and call credits used for communication with
                                        the client. <br> <br>
                                        D. The Agent shall conform to the advertised price of the company.
                                    </div>
                                
                                        
                                    
                                </div>
                            </div>
    <!-- Consultants Form End -->
 @include('layout.footer')
    </body>

</html>