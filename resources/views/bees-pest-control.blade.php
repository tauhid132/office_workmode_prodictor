@extends('master')
@section('page-title', "Bees Pest Control")
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
                        <h2>Bees Pest Control</h2>
                        <div class="text">
                            <p>At Rowad Al Ghad, we understand the importance of bees in our ecosystem, but we also recognize the need for safe and effective bee pest control solutions when they pose a threat to homes or businesses. Bees can become a nuisance when they establish hives in unwanted areas, presenting risks to occupants and property. Our team of experienced technicians specializes in humane bee removal and relocation services, prioritizing the safety of both people and pollinators. We utilize innovative techniques and eco-friendly products to carefully remove bee colonies while minimizing harm to the environment. With a commitment to professionalism, integrity, and customer satisfaction, you can trust Rowad Al Ghad to handle bee infestations with care and expertise. Contact us today to schedule a consultation and ensure the peaceful coexistence of humans and bees on your property.</p>
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
                                    <li><a href="{{ route('view.rodents.pest.control') }}">Rodents Control</a></li>
                                    <li><a href="{{ route('view.flies.pest.control') }}">Fly Control</a></li>
                                    <li class="active"><a href="{{ route('view.bees.pest.control') }}">Bee Control</a></li>
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
<!--End pagewrapper-->
@endsection