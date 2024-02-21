<head>
	<title>Login</title>
	<link rel="icon" href="{{ asset('images/favicon.svg') }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">
	<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/tiny-slider/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/glightbox/css/glightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/choices/css/choices.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/flatpickr/css/flatpickr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<style>
		.select2-container .select2-search--inline .select2-search__field {
			height: 24px; !important
		}
		</style>
	
	
</head>
<body>
<main>
    <section class="container">
        <center>
            <div class="col-md-4">
                <div class="card bg-mode shadow rounded-3 overflow-hidden p-4">
                    @if(Session::has('status'))
                    <div class="alert alert-danger text-center alert-dismissible fade show mb-4 mx-2" role="alert">
                        <i class="ri-error-warning-line me-3 align-middle fs-16"></i>
                        <strong>{{ Session::get('status') }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center alert-dismissible fade show mb-4 mx-2" role="alert">
                        <i class="ri-error-warning-line me-3 align-middle fs-16"></i>
                        <strong>{{ $error }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                    <h1 class="mb-2 h3">Admin Login</h1>
                    <form class="mt-4 text-start" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3 position-relative">
                            <label class="form-label">Password</label>
                            <input class="form-control fakepassword" type="password" id="psw-input" name="password" placeholder="Enter Your Password">
                            <span class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                <i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                            </span>
                        </div>
                        <div class="mb-3 d-sm-flex justify-content-between">
                            <div>
                                <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                                <label class="form-check-label" for="rememberCheck">Remember Me?</label>
                            </div>
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <div><button type="submit" class="btn btn-success w-100 mb-0">Login</button></div>
                    </form>
                </div>
            </div>
        </center> 
    </section>
</main>
</body>

<script src="{{ asset('assets/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="{{ asset('assets/dashboard/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/dashboard/vendor/glightbox/js/glightbox.js') }}"></script>
<script src="{{ asset('assets/dashboard/vendor/choices/js/choices.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/functions.js') }}"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>