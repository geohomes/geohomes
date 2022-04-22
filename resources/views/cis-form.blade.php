  @include('layout.header')
<title>GeoHomes | CIS Form</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
  <!-- Global Banner -->
    <section class="global-banner">
       <img src="/assets/img/materials/client-banner.jpg" alt="">
        <h2 class="container">Welcome CIS Page</h2>
    </section>
    <!-- Global Banner End -->

    <form class="application-form">
      <h3 class="mb-3" style="background-color:#FF3514;">CLIENT’S INFORMATION SYSTEM (CIS) FORM<br>Kindly fill out the form with the correct details.</h3>
      
      <div class="leftcontact">
            <div class="form-group">
              <p>Full Name</p>
                <input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                <div class="validation"></div>
       </div> 
            
       <div class="form-group">
      <p>Phone number</p>  
        <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>E-mail</p>  
                <input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
 			  <div class="validation"></div>
     	 </div> 
     	 <div class="form-group">
      <p> Residential Address <span>*</span></p>
      
        <input type="text" name="home-adresse" id="adresse" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>
 		
 		<div class="form-group">
      <p>Occupation</p>
                <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>

 		<div class="form-group">
      <p>Date of Birth</p>
        <input type="calendar" name="LGA" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Plot Number</p>
        <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
         <div class="validation"></div>
      </div>  
      	<p>Lifted</p>
      	<div class="form-group">
        <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
        <div class="validation"></div>
      </div> 

  </div>
  <div class="rightcontact">  

      <p>Layout</p>
      	<div class="form-group">
        <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
        <div class="validation"></div>
      </div>

       <p>Amount</p>
      	<div class="form-group">
        <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
        <div class="validation"></div>
      </div> 

      <h3 class="mb-4">Agent</h3>
      <div class="form-group">
      <p>Full Name</p>
      
        <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
         <div class="validation"></div>
      </div> 
  <div class="form-group">
      <p>Phone number</p>  
        <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
      </div>
     	 <div class="form-group">
      <p> Residential Address</p>
      
        <input type="text" name="home-adresse" id="adresse" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>
      <div class="form-group">
      <p>Email</p>
        <input type="email" name="home-adresse" id="adresse" data-rule="required" data-msg="please fill this filled"/>
         <div class="validation"></div>
      </div>
 		
 		<div class="form-group">
      <p>Occupation</p>
        <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled"/>
        <div class="validation"></div>
      </div>

  </div>
<button type="submit" class="bouton-contact mb-5">Send</button>
</form>
                            <div class="container">
                            	<div class="d-flex justify-content-center" style="border: 10px; background-color: black; ">
                            <h3 style="color: white; font-size: 35px;">Terms and Conditions</h3>
                        </div>
                            <div class="row mb-5">
                                    <div class="col-sm-12 col-lg-6 mt-4" style="border:7px #0EA15F solid; border-radius: 20px;">
                                    	<u style="color: black"><h2 class="mt-4" style="color:  #0EA15F "> Agency Agreement</h2></u>
                                        This AGENCY AGREEMENT made between (Applying Agent) and KERAE HOMES LIMITED, a
                                        body registered under Part A of the Companies and Allied Matters Act, Cap C20,
                                        Laws of the Federation of Nigeria, and having its registered Office address at
                                        Km 36, Ero’s House, Duplex 2 Eputu, Lekki-Expressway, Lagos State. (Principal)
                                        on the other Part HEREBY APPOINTS (Agent) in accordance with the terms of this
                                        Agreement :
                                    </div>
                                    <div class="col-sm-12 col-lg-6 mt-4" style="border:7px #0EA15F solid; border-radius: 20px;">
                                    	<u style="color: black"><h2 style="color:  #0EA15F " class="mt-4" >IDEMNIFICATION</h2></u>
                                        The Principal will not indemnify the agent or any third party for any loss or damage arising from the actions of the agent in course of any transaction on behalf of the Principal.

                                    	<u style="color: black"><h2 style="color:  #0EA15F ">TERMINATION</h2></u>
                                        The Agent agreement will be terminated by the consent of both parties.
                                    </div>

                            			<div class="col-sm-12 col-lg-6 "style="border:7px #0EA15F solid; border-radius: 20px;">
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

                                    <div class="col-sm-12 col-lg-6 " style="border:7px #0EA15F solid; border-radius: 20px;">
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