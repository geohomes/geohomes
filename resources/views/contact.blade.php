   @include('layout.header')
<title>GeoHomes | Contact</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
<div style="background-image: url(/assets/img/materials/contact-banner.jpg);">
<section id="contact">
  <h1 class="section-header">Contact</h1>
  <div class="contact-wrapper mb-5">
  <!-- Left contact page --> 
    <div class="container">
    <div class="row col-sm-12 col-lg-6">
    <form id="contact-form" class="form-horizontal mb-5" role="form">
       
      <div class="form-group">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
        </div>

      <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
        </div>

      <textarea class="form-control" rows="8" placeholder="MESSAGE" name="message" required></textarea>
      
      <button style="background-color:#0EA15F!important;" class="btn send-button" id="submit" type="submit" value="SEND">
        <div class="alt-send-button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
      
    </form>
    </div>
  </div>
  <!-- Left contact page --> 
    
      <div class="container">
        <div class="row col-sm-12 col-lg-9"></div>
        <ul class="contact-list">
          <li class="list-item "><i class="fa fa-map-marker"><span class="contact-text place">4th Floor, Mukhtar El Yakub Building Zakariyya Maimalari Street,<br> Central Business District Abuja.<br> FCT 900211 Nigeria</span></i></li>
          
          <li class="list-item"><i class="fa fa-phone"><span class="contact-text phone"><a href="tel:+91 584 7564" title="Give me a call">+91 584 7564</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope"><span class="contact-text gmail"><a href="mailto:info@geohomes.com" title="Send me an email">info@geohomes.com</a></span></i></li>


          <ul class="social-media-list mr-4 col-sm-12 col-lg-9">
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fab fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fab fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fab fa-instagram" aria-hidden="true"></i></a>
          </li>  

          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fab fa-linkedin" aria-hidden="true"></i></a>
          </li>       
        </ul>

        </ul>
      </div>
      </div>
    </div>
  </div>
  
</section>  
  
  <script type="text/javascript">
    
    document.querySelector('#contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
  });

  </script>

     @include('layout.footer')

</body>

</html>