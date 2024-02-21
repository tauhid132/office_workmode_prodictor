@extends('master')
@section('page-title', "About Us")
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

     

     <!-- Page Title -->
     <section class="page-title" style="background-image: url(assets/images/background/bg-3.jpg);">
        <div class="auto-container">
            <h1>About Us</h1>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-wrapper wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="assets/images/resource/image-1.jpg" alt="">
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-block wow fadeInUp" data-wow-duration="1500ms">
                        <div class="sec-title mb-20">
                            <div class="sub-title">About Us</div>
                            <h2>Rowad Al Ghad</h2>
                        </div>
                        <div class="text">If you are looking for a pest control company in Dubai, you have come to the right place. Our reliable pest control services and professional technicians are licensed approved by the Dubai & Sharjah Municipality. Based on Integrated Pest Management (IPM) approach, our expert technicians venture to get to the core of the problem and eradicate it once and for all. Progress has to be monitored. So needless to say, once you appoint us to take care of the problem we will make sure we see the end of it. Our services target all kinds of pests; flying or crawling bugs and insects, rodents, reptiles, and termites. You might have noticed that when you try to remove their colonies on your own, they form again in a few days. Such is the case especially with termites.

                            We offer complete pest control service in Dubai and Sharjah with the latest technology for the safe disposal of all kinds of insects and rodents without harming any furniture, furnishings or any interior.
                            
                            All our services are guaranteed to assure complete customer satisfaction by providing the best and the most effective solutions. We are available 24 hours a day, and we also provide same day services, to serve you better. Our reasonably priced services will not disappoint you, in terms of reliability and effectiveness.</div>
                      
                        <div class="link-btn"><a href="https://wa.me/971569193222" class="theme-btn btn-style-one"><span> Book Services</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    @include('includes.subscribe')

    @include('includes.footer')
	
</div>
@endsection