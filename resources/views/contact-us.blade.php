@extends('master')
@section('page-title', "Contact Us")
@section('main-body')
<div class="page-wrapper">
    @include('includes.header')
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="get" action="{{ route('view.home.page') }}">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="page-title" style="background-image: url(assets/images/background/bg-3.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        </div>
    </section>
    <section class="contact-info-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sec-title mb-30">
                        <div class="sub-title">Contact Us</div>
                        <h2>Our Contacts & <br> Location</h2>
                    </div>
                    <div class="info-wrapper">
                        <div class="info-block">
                            <h4>Contact info</h4>
                            <div class="text mb-2"><i class="fa fa-map-marker text-black-50"></i> Dubai, United Arab Emirates</div>
                            <div class="email"><a href="mailto:example@pestico.com">sales@pestcontrol-dubai.ae</a></div>
                            <div class="phone"><i class="fa fa-phone"></i> <a href="tel:+971 4 25 62 282">+971 4 25 62 282</a></div>
                            <div class="phone"><i class="fa fa-phone"></i> <a href="tel:+971 55 219 00 45">+971 55 219 00 45</a></div>
                        </div>
                        <div class="info-block">
                            <h4>Social contact</h4>
                            <ul class="social-links">
                                <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#" class="google-plus"><span class="fab fa-google-plus-g"></span></a></li>
                                <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#" class="linkedin-in"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-map">
                        <iframe width="800" height="430" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=600&amp;height=430&amp;hl=en&amp;q=%20dubai+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://www.krankenversicherungsvergleich.at/'>Zusatzversicherung Vergleich</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=5c8038ddd0a1997a4ed49f501684f2399b5eabfe'></script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Don’t Hesitate to <span>Question Us</span> <br> Any Time</h2>
            </div>
            <div class="contact-form">
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> {{ $error }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforeach
                @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> <i class="fa fa-warning"></i>  {{ session()->get('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><i class="fa fa-check"></i>  {{ session()->get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form method="post" action="{{ route('submit.contact.us') }}" id="contact-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" value="" placeholder="Your Name" name="full_name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="email" value="" placeholder="Your Email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" value="" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="text-center">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Send Message </span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @include('includes.footer')
	
</div>
@endsection