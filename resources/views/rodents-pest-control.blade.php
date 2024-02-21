@extends('master')
@section('page-title', "Rodents Pest Control")
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

    <section class="service-details">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 order-lg-2">
                    <div class="context-block">
                        <h2>Rodents Pest Control</h2>
                        <div class="text">
                            <p>At Rowad Al Ghad, we understand the distress rodents can cause in both residential and commercial settings, which is why we offer comprehensive rodent pest control services. From mice to rats, these pests not only damage property and contaminate food but also pose health risks to occupants. Our expert technicians employ proven methods and state-of-the-art techniques to identify rodent entry points, eliminate existing infestations, and prevent future occurrences. We prioritize the safety of your family, pets, and the environment by using environmentally friendly products and humane trapping methods. With our personalized approach and unwavering commitment to customer satisfaction, you can trust Rowad Al Ghad to deliver efficient and effective rodent pest control solutions tailored to your needs. Say goodbye to unwanted furry intruders—contact us today to schedule a consultation and regain control of your space.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-side left-sidebar">
                    <aside class="sidebar">
                        <div class="sidebar-widget categories">
                            <h3 class="sidebar-title">Pest Control</h3>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><a href="{{ route('view.cockroaches.pest.control') }}">Cockroach Control</a></li>
                                    <li><a href="{{ route('view.termites.pest.control') }}">Termites Control</a></li>
                                    <li><a href="{{ route('view.spiders.pest.control') }}">Spiders Control</a></li>
                                    <li class="active"><a href="{{ route('view.rodents.pest.control') }}">Rodents Control</a></li>
                                    <li><a href="{{ route('view.flies.pest.control') }}">Fly Control</a></li>
                                    <li><a href="{{ route('view.bees.pest.control') }}">Bee Control</a></li>
                                    <li><a href="{{ route('view.ants.pest.control') }}">Ant Control</a></li>
                                    <li><a href="{{ route('view.bed.bug.pest.control') }}">Bed Bug Control</a></li>
                                </ul>
                            </div>
                        </div>
                                            
                    </aside>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')
	
</div>
@endsection