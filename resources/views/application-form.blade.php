      @include('layout.header')
<title>GeoHomes | Application</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
  <!-- Global Banner -->
    <section class="global-banner">
        <img src="/assets/img/materials/application-form-banner.jpg" alt="">
        <h2 class="container">Application Form</h2>
    </section>
    <!-- Global Banner End -->

  <form class="application-form">
      <h3 class="mb-3">Kindly fill out the form with the correct details and one of our agents will get in touch with you. Fields marked with * are required.</h3>
      
      <div class="leftcontact">
            <div class="form-group">
              <p>Surname<span>*</span></p>
              <span class="icon-case"><i class="fa fa-male"></i></span>
                <input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                <div class="validation"></div>
       </div> 

            <div class="form-group">
            <p>Name <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
        <input type="text" name="prenom" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
                <div class="validation"></div>
      </div>

       <div class="form-group">
      <p>Phone number <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-phone"></i></span>
        <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>E-mail <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                <div class="validation"></div>
      </div>  

      <div class="form-group">
      <p>Date of Birth <span>*</span></p>
      <span class="icon-case"><i class="fa fa-calendar"></i></span>
        <input type="date" name="society" id="society" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Gender <span>*</span></p>
      <span class="icon-case"><i class="fa fa-option"></i></span>
        <select type="text" name="gender" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
        <option value="">Male</option>
        <option value="">Female</option>
        <option value="">Other</option>
      </select>
                <div class="validation"></div>
      </div> 

        <div class="form-group">
      <p>Marital Status<span>*</span></p>
      <span class="icon-case"><i class="fa fa-option"></i></span>
        <select type="text" name="status" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
        <option value="">Single</option>
        <option value="">Married</option>
        <option value="">Divorced</option>
        <option value="">Widowed</option>
        <option value="">Other</option>
      </select>
                <div class="validation"></div>
      </div>
  </div>

  <div class="rightcontact">  

      <div class="form-group">
      <p>State<span>*</span></p>
      <span class="icon-case"><i class="fa fa-building"></i></span>
        <input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                <div class="validation"></div>
      </div>  

       <div class="form-group">
      <p>Country<span>*</span></p>
      <span class="icon-case"><i class="fa fa-building"></i></span>
        <input type="text" name="country" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p> Residential Address <span>*</span></p>
      <span class="icon-case"><i class="fa fa-building"></i></span>
        <input type="text" name="home-adresse" id="adresse" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p> Local Government Area<span>*</span></p>
      <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
        <input type="text" name="LGA" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Organization / Employer<span>*</span></p>
      <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
        <input type="text" name="organization" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>

     <div class="form-group">
      <p>Office Adress<span>*</span></p>
      <span class="icon-case"><i class="fa fa-building"></i></span>
        <input type="text" name="office-addres" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>


      <div class="form-group">
      <p>Property Type<span>*</span></p>
      <span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="text" name="property" id="fonction" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Quantity<span>*</span></p> 
      <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="number" name="quantity" id="sujet" data-rule="required" data-msg="please fill this filled"/>
                <div class="validation"></div>
      </div>
      </div>  
  </div>
  </div>
<button type="submit" class="bouton-contact mb-5">Send</button>
  
</form> 

 @include('layout.footer')
</body>
</html>