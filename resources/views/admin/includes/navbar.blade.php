<section class="pt-4">
	<div class="container">
		<div class="card rounded-3 border p-3 pb-2">
			<!-- Avatar and info START -->
			<div class="d-sm-flex align-items-center">
				<div class="avatar avatar-xl mb-2 mb-sm-0">
					<img class="avatar-img rounded-circle" src="{{ Auth::user()->profile_image == null ? asset('images/avatar.png') : asset('images/profile_images').'/'.Auth::user()->profile_image }}" alt="">
				</div>
				<h4 class="mb-2 mb-sm-0 ms-sm-3"><span class="fw-light">Hi</span> {{ Auth::user()->name }}</h4>
				<a href="add-listing.html" class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0"><i class="fa fa-sign-out fa-fw me-2"></i>Logout</a>
			</div>
			<!-- Avatar and info START -->
			
			<!-- Responsive navbar toggler -->
			<button class="btn btn-primary w-100 d-block d-xl-none mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#dashboardMenu" aria-controls="dashboardMenu">
				<i class="bi bi-list"></i> Dashboard Menu
			</button>

			<!-- Nav links START -->
			<div class="offcanvas-xl offcanvas-end mt-xl-3" tabindex="-1" id="dashboardMenu">
				<div class="offcanvas-header border-bottom p-3">
					<h5 class="offcanvas-title">Menu</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#dashboardMenu" aria-label="Close"></button>
				</div>
				<!-- Offcanvas body -->
				<div class="offcanvas-body p-3 p-xl-0">
					<!-- Nav item -->
					<div class="navbar navbar-expand-xl">
						<ul class="navbar-nav navbar-offcanvas-menu">

							<li class="nav-item"> <a class="nav-link active" href="{{ route('view.dashboard') }}"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</a>	</li>

							<li class="nav-item"> <a class="nav-link" href="{{ route('viewCompanyInfo') }}"><i class="fa fa-building fa-fw me-1"></i>My Company</a> </li>

							<li class="nav-item"> <a class="nav-link" href="{{ route('viewEmployees') }}"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Employees</a> </li>

							<li class="nav-item"> <a class="nav-link" href="{{ route('viewProjects') }}"><i class="bi bi-bell fa-fw me-1"></i>Projects</a> </li>
		
							<li class="nav-item"> <a class="nav-link" href="{{ route('viewMyProfile') }}"><i class="fa fa-user fa-fw me-1"></i>My Profile</a>	</li>

							
						</ul>
					</div>
				</div>
			</div>
			<!-- Nav links END -->
		</div>
	</div>
</section>