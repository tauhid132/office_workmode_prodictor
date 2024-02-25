@extends('master')
@section('page-title', "Pest Control Services Company in Dubai, UAE | Pest Control Dubai")
@section('main-body')
<section class="py-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-light rounded-3 position-relative overflow-hidden p-4 p-xl-5">
					<div class="row g-4 align-items-center">
						<!-- Content -->
						<div class="col-lg-6">
							<!-- Title -->
							<h1 class="mb-3 fs-2">Hybrid Workmode Predictor</h1>
							<p class="mb-3">Increase your office's working efficiency using our ML Prodictor. Save your resouces & expand working talent pool.</p>
							<a href="#" class="btn btn-primary-soft mb-0">Try Our Predictor<i class="bi bi-arrow-right fa-fw ms-2"></i></a>
						</div>

						<!-- Image -->
						<div class="col-lg-6">
							<img src="{{ asset('images/hr.jpg') }}" alt="">
						</div>
					</div> <!-- Row END -->
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pt-0 pt-lg-5 mt-4">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h3 class="mb-0">Our <span class="text-primary">Features</span></h3>
            </div>
        </div>
        <div class="row g-4 justify-content-center mt-5">
            <div class="col-sm-6 col-lg-4 mb-4">
                <center>
                    <img src="{{ asset('images/ml.png') }}" style="height: 100px">
                    <h5 class="mt-2">ML Based Prediction</h5>
                    <p class="mb-0">Our system is well trained with over 1000+ data to predict more accurately.</p>
                </center>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <center>
                    <img src="{{ asset('images/analysis.png') }}" style="height: 100px">
                    <h5 class="mt-2">Project Analysis</h5>
                    <p class="mb-0">Our system will analyze your project with project description. It will also show project budget and estimated effort.</p>
                </center>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <center>
                    <img src="{{ asset('images/dashboard.png') }}" style="height: 100px">
                    <h5 class="mt-2">HR Dashboard</h5>
                    <p class="mb-0">HR Manager Dashboard for controlling and managing human resouce.</p>
                </center>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <center>
                    <img src="{{ asset('images/data-synchronization.png') }}" style="height: 100px">
                    <h5 class="mt-2">Employee Database Synchronization</h5>
                    <p class="mb-0">Sync with Office's employee database to predict employees based on projects. </p>
                </center>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <center>
                    <img src="{{ asset('images/api.png') }}" style="height: 100px">
                    <h5 class="mt-2">API for HR Softwares</h5>
                    <p class="mb-0">Companies can integrate our module with their custom HR Softwares.</p>
                </center>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <center>
                    <img src="{{ asset('images/report.png') }}" style="height: 100px">
                    <h5 class="mt-2">Analytics And Reports</h5>
                    <p class="mb-0">Play Online Games in Lowest Latency. Also browse websites more faster with our optimized Routing.</p>
                </center>
            </div>
        </div>
    </div>
</section>
	
</div>
@endsection