@extends('master')
@section('main-body')
@include('admin.includes.navbar')
<section class="pt-0">
	<div class="container vstack gap-4">
		<!-- Title START -->
		<div class="row">
			<div class="col-12">
				<h1 class="fs-4 mb-0"><i class="fa fa-building me-1"></i>Company Info</h1>
			</div>
		</div>	
		<div class="row">
			<div class="card shadow">
				
				<div class="card-body">
					@foreach ($errors->all() as $error)
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong> {{ $error }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					@endforeach
					@if(session()->has('error'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong> {{ session()->get('error') }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					@endif
					@if(session()->has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>  {{ session()->get('success') }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					@endif
					<form class="row g-3 align-items-center" method="post" action="{{ route('viewCompanyInfo') }}">
						@csrf
						<input type="hidden" name="id" value="{{ $company->id }}">
						<div class="col-xl-6">
							<label class="form-label">Company Name</label>
							<input type="text" class="form-control" name="company_name" value="{{ $company->company_name }}">
						</div>
						
						<!-- Input item -->
						<div class="col-xl-6">
							<label class="form-label">Company Type</label>
							<select class="form-select" name="company_type">
								<option value="IT Company">IT Service Company</option>
							</select>
						</div>
						
						<div class="col-12">
							<label class="form-label">About Company</label>
							<textarea class="form-control" name="about_company" rows="3">{{ $company->about_company }}</textarea> 
						</div>
						
						<div class="col-12">
							<label class="form-label">Address</label>
							<input type="text" name="address" value="{{ $company->address }}" class="form-control">
						</div>
						
						<div class="col-lg-6">
							<label class="form-label">Email Address</label>
							<input type="text" name="email" value="{{ $company->email }}" class="form-control">
						</div> 
						
						<div class="col-lg-6">
							<label class="form-label">Contact Number</label>
							<input type="text" name="mobile" value="{{ $company->mobile }}" class="form-control">
						</div>
						
						
						
						<!-- Textarea item -->
						<div class="col-12">
							<label class="form-label">Services</label>
							<select class="form-select select-search w-100" name="zones[]" multiple="multiple">
								<option value="">Web Development</option>
								<option value="">Software Development</option>
								<option value="">APP Development</option>
								<option value="">UI/UX Design</option>
								<option value="">Security & Quality Assurance</option>
								{{-- @foreach ($zones as $zone)
									<option value="{{ $zone->id }}">{{ $zone->zone_name }}</option>
									@endforeach --}}
								</select>
							</div>
							
							<!-- Save button -->
							<div class="d-sm-flex justify-content-end">
								<button type="submit" class="btn btn-primary mb-0"><i class="fa fa-refresh me-1"></i>Update</button>
							</div>
						</form>
					</div>
					<!-- Card body END -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection