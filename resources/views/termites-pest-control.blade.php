@extends('master')
@section('page-title', "Termites Pest Control")
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
                        <h2>Termites Pest Control</h2>
                        <div class="text">
                            <p>Protect your property from the destructive force of termites with Rowad Al Ghad. Termites pose a serious threat to homes and businesses, causing extensive damage that can compromise structural integrity and lead to costly repairs. Our team of termite experts specializes in comprehensive pest control solutions designed to detect, eliminate, and prevent termite infestations. Through thorough inspections, state-of-the-art treatments, and proactive prevention strategies, we safeguard your investment and provide peace of mind. With a focus on professionalism, reliability, and customer satisfaction, we deliver results you can trust. Don't let termites wreak havoc on your property. Contact Rowad Al Ghad today to schedule a consultation and fortify your defenses against these relentless pests</p>
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
                                    <li class="active"><a href="{{ route('view.termites.pest.control') }}">Termites Control</a></li>
                                    <li><a href="{{ route('view.spiders.pest.control') }}">Spiders Control</a></li>
                                    <li><a href="{{ route('view.rodents.pest.control') }}">Rodents Control</a></li>
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