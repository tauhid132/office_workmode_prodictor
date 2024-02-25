@extends('admin.master')
@section('main-body')
<section class="pt-5">
	<div class="container vstack gap-4">
		<!-- Title START -->
		<div class="row">
			<div class="col-12">
				<h1 class="fs-4 mb-0"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</h1>
			</div>
		</div>	
		<!-- Title END -->

		<!-- Counter START -->
		<div class="row g-4">
			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="card card-body border">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-xl bg-success rounded-3 text-white">
							<i class="fa fa-users"></i>
						</div>
						<!-- Content -->
						<div class="ms-3">
							<h4>0</h4>
							<span>Total Employees</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="card card-body border">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-xl bg-info rounded-3 text-white">
							<i class="bi bi-graph-up-arrow"></i>
						</div>
						<!-- Content -->
						<div class="ms-3">
							<h4>0</h4>
							<span>Total Projects</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="card card-body border">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-xl bg-warning rounded-3 text-white">
							<i class="bi bi-bar-chart-line-fill"></i>
						</div>
						<!-- Content -->
						<div class="ms-3">
							<h4>0</h4>
							<span>Predictions</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Counter item -->
			<div class="col-sm-6 col-xl-3">
				<div class="card card-body border">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-xl bg-primary rounded-3 text-white">
							<i class="bi bi-star"></i>
						</div>
						<!-- Content -->
						<div class="ms-3">
							<h4>100</h4>
							<span>Ongoing Project</span>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
@endsection