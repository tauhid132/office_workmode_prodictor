@extends('master')
@section('page-title', $blog->title)
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
   
    <section class="sidebar-page">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-single-post">
                        <div>
                            <h1 class="fw-bold">{{ $blog->title }}</h1>
                            <div class="text">By {{ $blog->author->name }} - {{ $blog->created_at->format('F j, Y') }}</div>
                        </div>
                        <div class="image-block"><img src="{{ asset('assets/images/blog_images') }}/{{ $blog->cover_image }}" style="width: 100%" alt=""></div>
                       
                        <div class="text">
                            <p>{!! $blog->body !!}</p>
                           
                        </div>
                        
                    </div>
                    <div class="post-share-link">
                        <h4>Share this post:</h4>
                        <ul class="social-links">
                            <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#" class="google-plus"><span class="fab fa-google-plus-g"></span></a></li>
                            <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-lg-4 sidebar-side">
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