  @include('layout.header')
<title>GeoHomes | Lifting Form</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
   <!--? Hero Start -->
        <div class="slider-area2 section-bg2" data-background="assets/img/materials/lifting-banner.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2 style="color:black">Lifting Form</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
      <center>
    <div class="container">
    <div class="form-wrapper mt-50">
   <form id="contact-form" action="#" method="POST">
    <div class="row">
       <div class="col-12">
        <p class="contact-title mt-20 padding-10 " style="color:black">Application Form for Lifting / Extraction / Change of Title of Survey Plan</p>
        </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="form-box user-icon mb-0">
              <p>Land Purchaser/Allottee Section</p>
                <input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." placeholder="Full Name of Land Purchaser/Allottee " />
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
              <p> Address of Land Purchaser</p>
                <input type="text" name="home-adresse" id="adresse" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
              </div>
              <div class="form-box user-icon mb-0">
              <p> Signature of the Purchaser</p>
                <input type="text" name="home-adresse" id="adresse" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
              </div>
        
                   <div class="form-box user-icon mb-0">
                <p> Land Seller/Donor Section</p>
                 <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled" placeholder="Full Name of Land Seller/Donor" />
                 <div class="validation"></div>
                </div>
                  <div class="form-box user-icon mb-0">
                  <p>Address of Land Seller</p>
                    <input type="text" name="LGA" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>

                  <div class="form-box user-icon mb-0">
                  <p>Phone Number</p>
                  <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                   <div class="validation"></div>
                </div>
              </div>

               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-box user-icon mb-0">
                    <p>Signature of the Land Seller</p>
                  <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                  <div class="validation"></div>
                </div> 

                  <div class="form-box user-icon mb-0">
                  <p>Layout</p>
                  <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                  <div class="validation"></div>
                </div>

                  <div class="form-box user-icon mb-0">
                  <p> Plot (s) Number</p>
                  <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                  <div class="validation"></div>
                </div>
                  <div class="form-box user-icon mb-0">
                 <p>Type of Document Presentedt</p>
                  <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                  <div class="validation"></div>
                </div>
                  <div class="form-box user-icon mb-0">
                     <p>The Community Land Committe/Land Owner Section</p>
                    <input type="text" name="state"  placeholder="Agent`s Full Name" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." placeholder="Enter Full Name" />
                     <div class="validation"></div>
                  </div> 

                   <div class="form-box user-icon mb-0">
                  <p>Residential Address</p>  
                    <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                            <div class="validation"></div>
                  </div>
                    <div class="form-box user-icon mb-0">
                  <p> Signature</p>
                    <input type="text" name="home-adresse" id="adresse" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                 </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-box user-icon mb-0">
                  <p>Date Of Registration</p>
                    <input type="date" name="property" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                      <div class="form-box user-icon mb-0">
                  <p>Land Owner`s Comment</p>
                    <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                    <div class="form-box user-icon mb-0">
                  <p>Offical Use Only</p>
                    <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled" placeholder="APPROVAL BY PRINCIPAL CONSULTANT" />
                    <div class="validation"></div>
                  </div>
                   <div class="form-box user-icon mb-0">
                  <p>Name of Recorded personnel</p>
                    <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                   <div class="form-box user-icon mb-0">
                  <p>Plan Number (s)</p>
                    <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                   <div class="form-box user-icon mb-0">
                  <p>Lifter`s Full Name</p>
                    <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                  <div class="form-box user-icon mb-0">
                  <p>Payment Status</p>
                    <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                    <div class="validation"></div>
                  </div>
                </div>
             <div class="col-lg-12 submit-info mb-45 ml-0">
              <button class="submit-btn2" type="submit" style="background-color:#0EA10F;">Submit Form</button>
              </div>

            </form>
          </div>
        </div>
        </center>
                          
    <!-- Consultants Form End -->
        @include('layout.footer')
     </body>
</html>