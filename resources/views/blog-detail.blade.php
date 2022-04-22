    @include('layout.header')
<title>GeoHomes | Blog-Detail</title>
</head>

<body>


    <!-- Header -->
      @include('layout.navbar')
    </header>

 <!-- Blog Detail -->
    <section class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-40">
                    <img src="/assets/img/materials/house01.jpg" alt="">
                </div>

                <div class="col-lg-6 mb-50">
                    <div class="text">
                        <u style="color: black 12px;"><h2 style="color: #0EA15F;">How to Create Your Ultimate Outdoor Kitchen</h2></u>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, maxime? Lorem ipsum
                            dolor sit amet consectetur adipisicing elit. Suscipit voluptates placeat illum, corporis
                            quibusdam consequuntur nulla. Minus quam temporibus similique commodi porro officiis
                            molestias, facilis quasi tenetur. Recusandae, sequi quis amet porro aliquam magnam accusamus
                            necessitatibus placeat quam nisi atque debitis odio quibusdam perspiciatis esse doloribus
                            itaque ratione eius modi? Veritatis iure molestias molestiae odio esse nemo ea ipsam unde,
                            aliquid incidunt voluptas cum ratione libero sunt. Nobis, eius veritatis? <br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium assumenda et aut optio, id adipisci, autem culpa numquam modi provident consequuntur possimus sint alias nobis odit ex enim? Alias dolore reiciendis vel excepturi, eum in! Libero asperiores, ad quas ipsam magnam esse ea facere non ab quos voluptate culpa voluptatibus inventore? Facere, dolorem! Doloremque molestias dolore necessitatibus beatae tempore quaerat!</p>
                    </div>
                </div>
                <div class="row mt70">
                    <div class="col-lg-4">
                        <a href="/assets/img/materials/house01.jpg" data-lightbox="blog">
                            <img src="/assets/img/materials/house01.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="/assets/img/materials/house02.jpg" data-lightbox="blog">
                            <img src="/assets/img/materials/house02.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="/assets/img/materials/house03.jpg" data-lightbox="blog">
                            <img src="/assets/img/materials/house03.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Detail End -->

   @include('layout.footer')

</body>

</html>
