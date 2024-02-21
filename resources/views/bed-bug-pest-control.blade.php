@extends('master')
@section('page-title', "Bed Bugs Pest Control")
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
                        <h2>Bed Bug Pest Control</h2>
                        <div class="text">
                            <p>Say goodbye to sleepless nights with expert bed bug control solutions from Rowad Al Ghad. Bed bugs are relentless pests that can invade homes and businesses, causing discomfort and frustration for occupants. Our team specializes in comprehensive bed bug control services, utilizing advanced techniques and eco-friendly products to eradicate bed bug infestations effectively. From thorough inspections to targeted treatments and ongoing prevention strategies, we're dedicated to ensuring your space remains bed bug-free. With our commitment to professionalism, integrity, and customer satisfaction, you can trust Rowad Al Ghad to deliver reliable and efficient bed bug control solutions tailored to your needs. Don't let bed bugs take over—contact us today to schedule a consultation and restore peace and comfort to your environment.</p>
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
                                    <li><a href="{{ route('view.bees.pest.control') }}">Bee Control</a></li>
                                    <li><a href="{{ route('view.ants.pest.control') }}">Ant Control</a></li>
                                    <li class="active"><a href="{{ route('view.bed.bug.pest.control') }}">Bed Bug Control</a></li>
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