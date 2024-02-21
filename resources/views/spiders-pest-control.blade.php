@extends('master')
@section('page-title', "Spiders Pest Control")
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
                        <h2>Spiders Pest Control</h2>
                        <div class="text">
                            <p>Keep your home or business spider-free with expert pest control solutions from Rowad Al Ghad. Spiders may be beneficial predators, but when their populations grow out of control, they can become a nuisance and even a source of fear for many individuals. Our team understands the importance of maintaining a safe and comfortable environment, which is why we offer specialized spider pest control services tailored to your needs. Using advanced techniques and eco-friendly products, we target spider infestations at their source while minimizing harm to the environment and non-target species. From thorough inspections to targeted treatments and ongoing prevention strategies, we're committed to keeping your space free from unwanted eight-legged intruders. Trust Rowad Al Ghad to deliver reliable, effective, and professional spider pest control solutions. Contact us today to schedule a consultation and reclaim your space from arachnid invaders.</p>
                            
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
                                    <li class="active"><a href="{{ route('view.spiders.pest.control') }}">Spiders Control</a></li>
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