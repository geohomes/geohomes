 <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom header-sticky bg-white">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img src="/assets/img/logo/logo1.png" alt=""></a>
                            </div>
                                <div class="menu-wrapper  d-flex justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav> 
                                            <ul id="navigation">                                                                                          
                                                <li><a href="{{ route('home') }}">Home</a></li>
                                                <li><a href="{{ route('about') }}">About</a></li>

                                                <li><a href="#">Services</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('consultancy') }}">Consultancy</a></li>
                                                        <li><a href="{{ route('construction') }}">Construction</a></li>
                                                        <li><a href="{{ route('real-estate') }}">Real-Estate</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="#">Forms</a>
                                                     <ul class="submenu">
                                                        <li><a href="{{ route('application-form') }}">Application</a></li>
                                                        <li><a href="{{ route('book-inspection') }}">Book Inspection</a></li>
                                                        <li><a href="{{ route('consultants-form') }}">Consultants</a></li>
                                                        <li><a href="{{ route('cis-form') }}">CIS Form</a></li>
                                                        <li><a href="{{ route('lifting-form') }}">Lifting Form</a></li>
                                                        <li><a href="{{ route('property-form') }}">Property Search Form</a></li>
                                                        <li><a href="{{ route('site-form') }}">Site Inspection Form</a></li>
                                                     </ul>
                                                </li>

                                                <li><a href="#">Careers</a>
                                                    <ul class="submenu">
                                                         <li><a href="{{ route('affiliate') }}">Affiliate</a></li>
                                                         <li><a href="{{ route('career') }}">Our Careers</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="#">Portfolio</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('our-estate') }}">Our Estates</a></li>
                                                        <li><a href="{{ route('our-work') }}">Our Works</a></li>
                                                    </ul>
                                                </li>
                                                 <li><a href="#">media</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('blog') }}">Bolg</a></li>
                                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                                
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->