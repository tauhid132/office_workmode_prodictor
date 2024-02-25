@extends('master')
@section('page-title', "Pest Control Services Company in Dubai, UAE | Pest Control Dubai")
@section('main-body')
<section class="py-0">
	<div class="container">
		<div class="row justify-content-center align-items-center m-auto">
			<div class="col-12">
					<div class="row g-0">
						<div class="col-lg-6 d-md-flex align-items-center order-2 order-lg-1">
							<div class="p-3 p-lg-5">
								<img src="{{ asset('images/registration.jpg') }}" alt="">
							</div>
							<div class="vr opacity-1 d-none d-lg-block"></div>
						</div>
		
						<div class="col-lg-6 order-1">
							<div class="p-4 p-sm-6">
								<h3 class="mb-2 h4">Create Account for your Company</h3>
								<p class="mb-0">Already have an account?<a href="{{ route('login') }}"> Log in</a></p>
		
								<form method="post" action="{{ route('registerCompanyInfo') }}" class="mt-4 text-start">
									@csrf
									<input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <div class="mb-3">
										<label class="form-label">Company Name</label>
										<input type="text" class="form-control" name="company_name" placeholder="e.g. ATS Technologies">
									</div>
                                    <div class="mb-3">
										<label class="form-label">Company Type</label>
										<select class="form-select" name="company_type">
											<option value="IT Company">IT Company</option>
										</select>
									</div>
									<div class="mb-5">
										<label class="form-label">Number of Employees</label>
										<select class="form-select" name="number_of_employee">
											<option value="2-5">2-10</option>
											<option value="10-20">10-50</option>
											<option value="50-100">50-100</option>
											<option value="100-500">100-500</option>
										</select>
									</div>
									
									<div><button type="submit" class="btn btn-success w-100 mb-0 rounded-5"><i class="fa fa-arrow-right"></i> Create Account</button></div>
		
								</form>
							</div>		
						</div>
					</div>
			</div>
	</div>
</section>


	
</div>
@endsection