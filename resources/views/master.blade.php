<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.svg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('theme/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/choices/css/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/flatpickr/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/splide-master/dist/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ru.js"></script>
</head>
<style>
    .payment-checkbox{
        display: none;
    }
    .payment_box{
        border: 1px solid green
    }
    .payment-checkbox:checked + .form-check-label{
        border-style: dashed;
        background: #bff195 !important;
    }
    .user-selector-checkbox{
        display: none;
    }
    .user-selector-checkbox:checked + .form-check-label a{
        background-color: #28a745 !important;
    }
    .size-selector-checkbox{
        display: none;
    }
    .size-selector-checkbox:checked + .form-check-label span{
        background-color: #28a745 !important;
    }
    .color-selector-checkbox{
        display: none;
    }
    .color-selector-checkbox:checked + .form-check-label div{
        border: 3px solid #28a745 !important;
    }
</style>

<body>
    
    @include('includes.navbar')
    <main>
        @yield('main-body')
    </main> 
    @include('includes.footer')
    
</body>
<div class="back-top"></div>

<script src="{{ asset('theme/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script src="{{ asset('theme/vendor/glightbox/js/glightbox.js') }}"></script>
<script src="{{ asset('theme/vendor/splide-master/dist/js/splide.min.js') }}"></script>
<script src="{{ asset('theme/vendor/choices/js/choices.min.js') }}"></script>
<script src="{{ asset('theme/vendor/flatpickr/js/flatpickr.min.js') }}"></script>
<script src="{{ asset('theme/js/functions.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/l10n/es.min.js"></script>
@vite('resources/js/app.js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('script')
</html>

