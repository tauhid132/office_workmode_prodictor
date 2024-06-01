@extends('master')
@section('main-body')
@include('admin.includes.navbar')
<section class="pt-1">
	<div class="container vstack gap-4">
		<!-- Title START -->
		<div class="row">
			<div class="col-12">
				<h1 class="fs-4 mb-0"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</h1>
			</div>
		</div>	
		<!-- Title END -->

		<div class="row g-4 mb-5">
			<!-- Counter item -->
			<div class="col-md-6 col-xxl-3">
				<div class="card card-body bg-warning bg-opacity-10 border border-warning border-opacity-25 p-4 h-100">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Digit -->
						<div>
							<h4 class="mb-0">{{ $total_employees }}</h4>
							<span class="h6 fw-light mb-0">Total Employees</span>
						</div>
						<!-- Icon -->
						<div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class="fa-solid fa fa-users fa-fw"></i></div>
					</div>
				</div>
			</div>

			<!-- Counter item -->
			<div class="col-md-6 col-xxl-3">
				<div class="card card-body bg-success bg-opacity-10 border border-success border-opacity-25 p-4 h-100">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Digit -->
						<div>
							<h4 class="mb-0">{{ $total_projects->count() }}</h4>
							<span class="h6 fw-light mb-0">Total Projects</span>
						</div>
						<!-- Icon -->
						<div class="icon-lg rounded-circle bg-success text-white mb-0"><i class="fa-solid fa-hand-holding-dollar fa-fw"></i></div>
					</div>
				</div>
			</div>

			<!-- Counter item -->
			<div class="col-md-6 col-xxl-3">
				<div class="card card-body bg-primary bg-opacity-10 border border-primary border-opacity-25 p-4 h-100">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Digit -->
						<div>
							<h4 class="mb-0">{{ $total_projects->where('status', 'On-Going')->count() }}</h4>
							<span class="h6 fw-light mb-0">On-Going Projects</span>
						</div>
						<!-- Icon -->
						<div class="icon-lg rounded-circle bg-primary text-white mb-0"><i class="fa-solid fa fa-spinner fa-fw"></i></div>
					</div>
				</div>
			</div>

			<!-- Counter item -->
			<div class="col-md-6 col-xxl-3">
				<div class="card card-body bg-info bg-opacity-10 border border-info border-opacity-25 p-4 h-100">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Digit -->
						<div>
							<h4 class="mb-0">{{ $total_projects->where('status', 'Completed')->count() }}</h4>
							<span class="h6 fw-light mb-0">Completed Projects</span>
						</div>
						<!-- Icon -->
						<div class="icon-lg rounded-circle bg-info text-white mb-0"><i class="fa-solid fa-building-circle-check fa-fw"></i></div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
@endsection