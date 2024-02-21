<header class="main-header">
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="left-column">
                                        
                </div>
                <div class="right-column">
                    <div class="search-btn"><button type="button" class="theme-btn search-toggler"><span class="flaticon-search-1
                        "></span></button></div>
                    <ul class="contact-info">
                        <li><a href="tel:0569193222"><i class="fa-brands fa-whatsapp"></i>Call Us</a></li>
                        <li><a href="mailto:sales@pestcontrol-dubai.ae"><i class="flaticon-email-1"></i>sales@pestcontrol-dubai.ae</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('view.home.page') }}"><img src="{{ asset('logo-2.png') }}" alt=""></a></div>
                </div>
                <div class="nav-outer">
                    <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>

                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation">
                                <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{ route('view.home.page') }}">Home</a></li>
                                <li class="{{ Request::is('about-us') ? 'current' : '' }}"><a href="{{ route('view.about.us') }}">About Us</a></li>
                                <li class="dropdown"><a>Pest Control <i class="fa fa-caret-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('view.cockroaches.pest.control') }}">Cockroach Control</a></li>
                                        <li><a href="{{ route('view.spiders.pest.control') }}">Spiders Control</a></li>
                                        <li><a href="{{ route('view.termites.pest.control') }}">Termites Control</a></li>
                                        <li><a href="{{ route('view.rodents.pest.control') }}">Rodents Control</a></li>
                                        <li><a href="{{ route('view.flies.pest.control') }}">Fly Control</a></li>
                                        <li><a href="{{ route('view.bees.pest.control') }}">Bee Control</a></li>
                                        <li><a href="{{ route('view.ants.pest.control') }}">Ant Control</a></li>
                                        <li><a href="{{ route('view.bed.bug.pest.control') }}">Bed Bug Control</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a>Services <i class="fa fa-caret-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('view.sanitizing') }}">Sanitizing & Disinfecting </a></li>
                                        <li><a href="{{ route('view.rope.access.cleaning') }}">Rope Access Cleaning</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('blogs') ? 'current' : '' }}"><a href="{{ route('view.blogs') }}">Blogs</a></li>
                                <li class="{{ Request::is('contact-us') ? 'current' : '' }}"><a href="{{ route('view.contact.us') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="link-btn"><a href="https://wa.me/971569193222" class="theme-btn btn-style-one"><span>Book Now!</span></a></div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('view.home.page') }}"><img src="{{ asset('logo-2.png') }}" alt=""></a></div>
                    </div>
                    <div class="nav-outer">
                        <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>

                        <nav class="main-menu navbar-expand-md navbar-light">
                        </nav>
                    </div>
                    <div class="link-btn"><a href="https://wa.me/971569193222" class="theme-btn btn-style-one"><span>Book Now!</span></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-remove"></span></div>
        
        <nav class="menu-box">
            <div class="menu-outer mt-3"></div>
            <center><div class="link-btn p-4"><a href="https://wa.me/971569193222" class="theme-btn btn-style-one"><span>Book Now!</span></a></div></center>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>