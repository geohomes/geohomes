    @include('layout.header')
<title>GeoHomes | Blog</title>
</head>

<body>
    <!-- Header -->
      @include('layout.navbar')
    </header>

       <!-- Global Banner -->
    <section class="global-banner">
        <img src="/assets/img/materials/blog-banner.jpg" alt="">
        <h2 class="container">Blog</h2>
    </section>
    <!-- Global Banner End -->

    <!-- Blog -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="{{ route('blog-detail') }}" class="item">
                        <img src="/assets/img/materials/house01.jpg" alt="">
                        <div class="text">
                            <h4>How to Create Your Ultimate Outdoor Kitchen</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eum optio aperiam at velit iusto quas similique quaerat ex cumque?</p>
                            <span class="button">More <i class="fa fa-caret-right"></i></span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="{{ route('blog-detail') }}" class="item">
                        <img src="/assets/img/materials/house02.jpg" alt="">
                        <div class="text">
                            <h4>How to Plan the Perfect Patio</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eum optio aperiam at velit iusto quas similique quaerat ex cumque?</p>
                            <span class="button">More <i class="fa fa-caret-right"></i></span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="{{ route('blog-detail') }}" class="item">
                        <img src="/assets/img/materials/house03.jpg" alt="">
                        <div class="text">
                            <h4>9 Easy-to-Ambitious DIY Projects to Improve Your Home</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eum optio aperiam at velit iusto quas similique quaerat ex cumque?</p>
                            <span class="button">More <i class="fa fa-caret-right"></i></span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="{{ route('blog-detail') }}" class="item">
                        <img src="/assets/img/materials/house04.jpg" alt="">
                        <div class="text">
                            <h4>7 Ways to Enjoy the Outdoors at Home</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eum optio aperiam at velit iusto quas similique quaerat ex cumque?</p>
                            <span class="button">More <i class="fa fa-caret-right"></i></span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="{{ route('blog-detail') }}" class="item">
                        <img src="/assets/img/materials/house01.jpg" alt="">
                        <div class="text">
                            <h4>Looking for a New Place? Use This Time to Create Your Wishlist</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eum optio aperiam at velit iusto quas similique quaerat ex cumque?</p>
                            <span class="button">More <i class="fa fa-caret-right"></i></span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="{{ route('blog-detail') }}" class="item">
                        <img src="/assets/img/materials/house02.jpg" alt="">
                        <div class="text">
                            <h4>5 Ways to Make Your Home Office Work (Even if It's Your Kitchen)</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eum optio aperiam at velit iusto quas similique quaerat ex cumque?</p>
                            <span class="button">More <i class="fa fa-caret-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->

    @include('layout.footer')

</body>
</php>