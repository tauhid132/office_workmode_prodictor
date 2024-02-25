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
                    
                    <div class="col-lg-6 order-1">
                        <div class="p-4 p-sm-6">
                            <h3 class="mb-2 h4">Create Account for your Company</h3>
                            <p class="mb-0">Already have an account?<a href="{{ route('login') }}"> Log in</a></p>
                            
                            <form method="post" action="{{ route('register') }}" class="mt-4 text-start">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="e.g. Tauhid Hasan">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" name="email" placeholder="xyz@gmail.com">
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Password</label>
                                    <input class="form-control fakepassword" name="password" type="password" id="psw-input">
                                    <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                        <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                    </span>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                                
                                <div><button type="submit" class="btn btn-success w-100 mb-0 rounded-5"><i class="fa fa-arrow-right"></i> Next Step</button></div>
                                
                            </form>
                        </div>		
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
</div>
@endsection