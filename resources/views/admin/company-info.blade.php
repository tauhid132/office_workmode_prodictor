@extends('admin.master')
@section('main-body')
<section class="pt-5">
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
					<form class="row g-3 align-items-center">
						<div class="col-xl-6">
							<label class="form-label">Company Name</label>
							<input type="text" class="form-control" value="{{ $company->company_name }}">
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
							<textarea class="form-control" rows="3"></textarea> 
						</div>

						<div class="col-12">
							<label class="form-label">Registered Address</label>
							<input type="email" class="form-control">
						</div>

						<div class="col-lg-6">
							<label class="form-label">Email Address</label>
							<input type="text" class="form-control">
						</div> 

						<div class="col-lg-6">
							<label class="form-label">Contact Number</label>
							<input type="email" class="form-control">
						</div>

						

						<!-- Textarea item -->
						<div class="col-12">
							<label class="form-label">Services</label>
							<select class="form-select select-search w-100" name="zones[]" multiple="multiple">
								<option value="">Seleccionar</option>
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