<footer class="main-footer">
    <div class="upper-box">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <div class="widget">
                        <a  href="{{ route('view.home.page') }}"><img class="mb-3" src="{{ asset('logo-footer.png') }}" alt=""></a>
                        <div class="text">Rowad Al Ghad is a Pest Control Company is Dubai, UAE. Provding service like insect control, Sanitizing & Disinfecting, Building Cleaning etc.</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget links-widget">
                        <h4 class="widget_title">Pages</h4>
                        <div class="widget-content">
                            <ul class="list">
                                <li><a href="{{ route('view.home.page') }}">Home</a></li>
                                <li><a href="{{ route('view.about.us') }}">About Us</a></li>
                                <li><a href="{{ route('view.blogs') }}">Blogs & Articles </a></li>
                                <li><a href="{{ route('view.contact.us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget links-widget">
                        <h4 class="widget_title">Services</h4>
                        <div class="widget-content">
                            <ul class="list">
                                <li><a href="{{ route('view.sanitizing') }}">Sanitizing & Disinfecting Service </a></li>
                                <li><a href="{{ route('view.rope.access.cleaning') }}">Rope Access Cleaning </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="widget contact-widget">
                        <h4 class="widget_title">Contact</h4>
                        <ul>
                            <li>Dubai, United Arab Emirates</li>
                            <li><a href="mailto:sales@pestcontrol-dubai.ae">sales@pestcontrol-dubai.ae</a></li>
                            <li><a href="tel:0569193222">0569193222</a></li>
                        </ul>
                        <ul class="social-icon d-flex">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </div>               
</footer>
<div class="footer-bottom">
    <div class="auto-container">
        <div class="content">
            <div class="copyright"><a href="{{ route('view.home.page') }}">Rowad Al Ghad</a> © {{ date('Y') }} All Right Reserved</div>
            <div class="copyright">Developed by <a href="https://nextwaveit.tech">Next Wave IT</a></div>
        </div>            
    </div>
</div>

