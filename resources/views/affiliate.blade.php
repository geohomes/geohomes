   @include('layout.header')
<title>GeoHomes | Affiliate</title>
</head>

<body>


    <!-- Header -->
      @include('layout.navbar')
    </header>

  <!-- Global Banner -->
    <section class="global-banner">
        <img src="/assets/img/materials/affiliate-banner.jpg" alt="">
        <h2 class="container">Welcome To Our Affiliate Page</h2>
    </section>
    <!-- Global Banner End -->

    <!-- Affiliate -->
    <section class="affiliate mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-3">
                    <div class="text">
                        <h4 style="color: #0EA15F">Steps</h4>
                        <ul>
                            <li>To acknowledge your acceptance to be become an affiliate with Geohomes, Kindly fill the form on the right.</li>
                            <li>Download full agreement form, sign and send to <br> info@geohomes.com</li>
                            <li>To download full agreement form <a href="/assets/img/materials/house01.jpg" download style="color: #0EA15F">CLICK HERE</a></li>
                        </ul>

                        <h2>Thank You.</h2>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mb-5">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" id="name" for="name" placeholder="Full Name" required="name">
                            </div>
                            <div class="col-lg-12">
                                <input type="email" id="email" for="email" required="email" placeholder="victor@gmail.com">
                            </div>

                            <div class="col-lg-12">
                                <input type="email" id="phone"  for="phone" required="phone" placeholder="+91774793" required="">
                            </div>

                            <div class="col-lg-12">
                                <textarea  id="message" for="message" placeholder="Message "></textarea>
                            </div>

                            <div class="col-lg-12 col-sm-6 align-items-center ml-40">
                                <button  type="submit" class=" affiliate-button">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Affiliate End -->
    
     @include('layout.footer')
</body>
</html>