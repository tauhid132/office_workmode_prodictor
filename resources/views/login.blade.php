@extends('master')
@section('page-title', "Pest Control Services Company in Dubai, UAE | Pest Control Dubai")
@section('main-body')
<section class="py-0">
    <div class="container">
        <div class="row justify-content-center align-items-center m-auto">
            <div class="col-12">
                @include('includes.error-success-message')
                <div class="row g-0">
                    <div class="col-lg-6 d-md-flex align-items-center order-lg-1">
                        <div class="p-3 p-lg-5">
                            <img src="{{ asset('images/registration.jpg') }}" alt="">
                        </div>
                        <div class="vr opacity-1 d-none d-lg-block"></div>
                    </div>
                    
                    <div class="col-lg-6 order-1 mt-5">
                        <div class="p-4 p-sm-6">
                            <h3 class="mb-2 h4">Login to Dashboard</h3>
                            <p class="mb-0">Don't have an account?<a href="{{ route('login') }}"> Register Now!</a></p>
                            
                            <form method="post" action="{{ route('login') }}" class="mt-4 text-start">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                                </div>
                                
                                <div><button type="submit" class="btn btn-primary w-100 mb-0 rounded-5"><i class="fa fa-arrow-right"></i> Login</button></div>
                                
                            </form>
                        </div>		
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
</div>
@endsection