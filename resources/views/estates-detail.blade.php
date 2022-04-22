   @include('layout.header')
<title>GeoHomes | Estate-Detail</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>
<!-- Global Banner -->
    <section class="global-banner">
        <img src="/assets/img/materials/house03.jpg" alt="">
        <h2 class="container">OakVilla</h2>
    </section>
    <!-- Global Banner End -->

    <!-- Estates Detail -->
    <section class="estates-detail">
        <div class="container">
            <div class="d-flex justify-content-center"><h2>Recent Estates</h2></div>
            <div class="row mb-50">
                <div class="col-lg-4">
                    <a href="/assets/img/materials/house01.jpg" data-lightbox="/assets/img">
                        <img src="/assets/img/materials/house01.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/assets/img/materials/house02.jpg" data-lightbox="/assets/img">
                        <img src="/assets/img/materials/house02.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/assets/img/materials/house03.jpg" data-lightbox="/assets/img">
                        <img src="/assets/img/materials/house03.jpg" alt="">
                    </a>
                </div>
            </div>
             <div class="row mb-50">
                <div class="col-lg-6">
                    <img src="/assets/img/materials/house01.jpg" alt="">
                </div>

                <div class="col-lg-6">
                    <div class="text">
                        <h4>OakVilla</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ad omnis voluptatem voluptates, consequuntur officiis atque dolorum. Id voluptatem aliquam voluptates eius magnam tenetur officia fugiat eum quod non maxime facilis sapiente, exercitationem, atque dolor reiciendis. Labore deleniti sit dignissimos ab, mollitia assumenda non, possimus beatae nulla saepe esse aliquid.</p>
                        <ul>
                            <li><i style="color: #0EA15F" class="fa fa-home"></i> 5 bedrooms Villa (Oak) - 49 units</li>
                            <li><i style="color: #0EA15F" class="fa fa-home"></i>4 bedrooms Terrace (Acacia) - 52 units</li>
                            <li><i style="color: #0EA15F" class="fa fa-home"></i>3 bedrooms apartment (Maple) - 54 units </li>
                            <li><i style="color: #0EA15F" class="fa fa-home"></i>4 bedrooms penthouse - 5 units</li>
                            <li><i style="color: #0EA15F" class="fa fa-home"></i>Land size: 4.32 ha.</li>
                            <li><i style="color: #0EA15F" class="fa fa-home"></i>Location: Plot No. 132, cadastral zone Bo3, Wuye District</li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="row mb-50">
                <div class="col-lg-4">
                    <a href="/assets/img/materials/house01.jpg" data-lightbox="/assets/img">
                        <img src="/assets/img/materials/house01.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/assets/img/materials/house02.jpg" data-lightbox="/assets/img">
                        <img src="/assets/img/materials/house02.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/assets/img/materials/house03.jpg" data-lightbox="/assets/img">
                        <img src="/assets/img/materials/house03.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Estates Detail End -->


    @include('layout.footer')

</body>

</html>