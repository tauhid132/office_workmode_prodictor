@extends('master')
@section('page-title', "Sanitizing & Disinfecting Services")
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
    
    <section class="whychoose-us-section-two">
        <div class="sec-bg">
            <div class="left-side">
                <svg xmlns="http://www.w3.org/2000/svg" width="960" height="788"><path fill-rule="evenodd" fill="#111B31" d="M0-.001h960V788l-840-70c-27.339-2.48-46.419-22.524-50-50.001L0-.001z"/></svg>
            </div>
            <div class="right-side" style="background-image: url(assets/images/background/bg-2.jpg);"></div>
        </div>
        <span class="shape-one"><img src="assets/images/shape/shape-4.png" alt=""></span>
        <span class="shape-two"><img src="assets/images/shape/shape-5.png" alt=""></span>        
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="sec-title light mb-20">
                        <div class="sub-title">Services</div>
                        <h2>Sanitizing & <br>Disinfecting Services</h2>                        
                    </div>
                    <div class="text light mb-40">Fight germs alongside unwanted critters! Our expert team <br> extends protection with sanitizing & disinfecting services. <br>Using EPA-registered products, we tackle bacteria, viruses, <br> and allergens in homes & businesses. Breathe easy, live healthy <br> choose Rowad Al Ghad for complete peace of mind.</div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-settings"></span></div>
                                <div class="content">
                                    <h4>Residential Spray Services</h4>
                                    <div class="text">We use technologically advanced, professional electrostatic sprayers to deliver a safe, effective shield of a hospital-grade disinfectant over all surfaces.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                <div class="icon"><span class="flaticon-pesticide"></span></div>
                                <div class="content">
                                    <h4>Commercial Spray Services</h4>
                                    <div class="text">Offices, schools, nursing homes, churches, day care centers, gyms,
                                        and other commercial settings are especially susceptible to germs and bacterial infestations,
                                        and not just during the cold and flu seasons.
                                        
                                        Services you can trust!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.subscribe')

    @include('includes.footer')
	
</div>
@endsection