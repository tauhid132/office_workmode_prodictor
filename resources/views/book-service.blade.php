@extends('master')
@section('page-title', "Book Pest Service")
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

    <section class="contact-form-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Book your <span>Pest Service</span> <br> Now!</h2>
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
                <form method="post" action="{{ route('view.book.service') }}" id="contact-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" value="" placeholder="Your Name" name="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="email" value="" placeholder="Your Email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" value="" placeholder="Mobile No" name="mobile_no" required>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-select" name="service_name">
                                <option value="">Choose Service</option>
                                <option value="Cockroach Pest Service">Cockroach Pest Service</option>         
                                <option value="Bed Bugs Pest Service">Bed Bugs Pest Service</option>
                                <option value="Spiders Pest Service">Spiders Pest Service</option>
                                <option value="Termites Pest Service">Termites Pest Service</option>
                                <option value="Rodent Pest Service">Rodent Pest Service</option>
                                <option value="Fly Pest Service">Fly Pest Service</option>
                                <option value="Bees Pest Service">Bees Pest Service</option>
                                <option value="Ant Pest Service">Ant Pest Service</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea placeholder="Enter Service Details" name="details"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="text-center">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><i class="fa fa-paper-plane"></i><span>Submit </span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    
    

    @include('includes.footer')
	
</div>
<!--End pagewrapper-->
@endsection