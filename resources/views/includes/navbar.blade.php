<header class="navbar-light header-sticky">
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<a class="navbar-brand" href="{{ route('view.home.page') }}">
				<img class="light-mode-item navbar-brand-item" style="width: 200px" src="{{ asset('images/logo.png') }}" alt="logo">
			</a>
			<button class="navbar-toggler ms-auto ms-sm-0 p-2 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
				<span class="d-none d-sm-inline-block small">Menu</span>
			</button>
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll me-auto mx-auto">
					<li class="nav-item dropdown">
						<a class="nav-link {{ Request::is('/') ? 'active':''  }}" href="{{ route('view.home.page') }}">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link {{ Request::is('eventos') ? 'active':''  }}" href="">Our Services</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link {{ Request::is('blogs') ? 'active':''  }}" href="">Workmode Predictor</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link {{ Request::is('contact-us') ? 'active':''  }}" href="">HRM API</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link {{ Request::is('about-us') ? 'active':''  }}" href="">Contact Us</a>
					</li>
				</ul>
			</div>
			
			<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
				
				
				@if(!Auth::check())
				<li class="nav-item dropdown ms-0 ms-1">
					<a href="{{ route('login') }}"  class="btn btn-success btn-sm"><i class="fa fa-user"></i><span class="d-none d-sm-inline"> Login</span></a>
				</li>
				<li class="nav-item dropdown ms-0 ms-1">
					<a href="{{ route('register') }}" class="btn btn-primary btn-sm "><i class="fa fa-user-plus"></i> <span class="d-none d-sm-inline">Register</span></a>
				</li>
				{{-- <li class="nav-item dropdown ms-0 ms-1">
					<a href="{{ route('viewProducerRegister') }}" style="font-size: 12px; padding: 5px" class="btn btn-info btn-sm fs-12"><i class="fa fa-user-plus"></i> <span class="d-none d-sm-inline">Productor</span></a>
				</li> --}}
				@else
				<li class="nav-item ms-3 dropdown">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="avatar-img rounded-5" src="{{ Auth::user()->profile_image == null ? asset('images/avatar.png') : asset('images/profile_images').'/'.Auth::user()->profile_image }}" alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <div>
                                    <a class="h6 mt-2 mt-sm-0" href="#">{{ Auth::user()->name }}</a>
                                    <p class="small m-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </li>
                        <li> <hr class="dropdown-divider"></li>
						<li>
                            <a class="dropdown-item bg-success-soft-hover" href="{{ route('login') }}"><i class="fa fa-tachometer me-2"></i>My Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item bg-success-soft-hover" href="{{ route('logout') }}"><i class="fa fa-power-off me-2"></i>Logout</a>
                         
                        </li>
                    </ul>
                </li>
				@endif
			</ul>
		</div>
	</nav>
</header>