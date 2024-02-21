@extends('master')
@section('page-title', "Rope Access Cleaning")
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

    <section class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="image-wrapper wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset('building-window-cleaning.jpg') }}" style="height: 500px" alt="">
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content-block wow fadeInUp" data-wow-duration="1500ms">
                        <div class="sec-title mb-20">
                            <h2>Rope Access & Building Cleaning Service</h2>
                        </div>
                        <div class="text">Rowad Al Ghad provides complete window cleaning and maintenance services for commercial and
                            residential clients throughout the UAE.
                            A broad range of services coupled with an unwavering commitment to excellence
                            and an experienced staff means that you receive unparalleled service.</div>
                        <ul class="list">
                            <li>Window Washing</li>
                            <li>Maintenance Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.subscribe')

    @include('includes.footer')
	
</div>
@endsection