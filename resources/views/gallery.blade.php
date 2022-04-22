  @include('layout.header')
<title>GeoHomes | Gallery</title>
 <link rel="stylesheet" href="/assets/css/gallery.css">
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
<!-- gallery -->
<ul class="gallery mb-5 mt-3">
    <li>
        <figure>
            <a href="#"><img src="/assets/img/materials/house04.jpg" alt="Gallery item"></a>
            <figcaption>
                <h1>VILLA</h1>
            </figcaption>
        </figure>
    </li>
    <li class="tall">
        <figure>
            <a href="#"><img src="/assets/img/materials/home-products01.jpg" alt="Gallery item"></a>
            <figcaption>
                <h1>OAKVILLA</h1>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <a href="#"><img src="/assets/img/materials/home-products04.jpg"  alt="Gallery item"></a>
            <figcaption>
                <h1>VILLA</h1>
            </figcaption>
        </figure>
    </li>
    <li class="wide">
        <figure>
            <a href="#"><img src="/assets/img/materials/home-section02-2.jpg" alt="Gallery item"></a>
            <figcaption>
                <h1>OAKVILLA</h1>
            </figcaption>
        </figure>
    </li>
    <li class="tall">
        <figure>
            <a href="#"><img src="/assets/img/materials/house01.jpg" alt="Gallery item"></a>
            <figcaption>
                <h1>Enchantment</h1>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <a href="#"><img src="/assets/img/materials/house02.jpg" alt="Gallery item"></a>
            <figcaption>
                <h1>Torres</h1>
            </figcaption>
        </figure>
    </li>

     <li class="wide">
        <figure>
            <a href="#"><img src="/assets/img/materials/house03.jpg" alt="Gallery item"></a>
            <figcaption>
                <h1>Reflection, sunshine, shadow and rock HD</h1>
            </figcaption>
        </figure>
    </li>

    <li>
        <figure>
            <a href="#"><img src="/assets/img/materials/home-products05.jpg" alt="Gallery item"></a>
            <figcaption>
                <h1>Islands</h1>
            </figcaption>
        </figure>
    </li>
</ul>
<!-- //gallery js -->

  
 @include('layout.footer')
    </body>

</html>