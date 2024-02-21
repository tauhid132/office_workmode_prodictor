<!DOCTYPE html>

<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <!-- Dark mode -->
    
    
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
</style>
<body>
    <main>
        @include('admin.includes.header')
        
        <!-- Page content START -->
        <div  class="page-content">
            <div id="">
                @include('admin.includes.sidebar')
                @yield('main-body')
            </div>
        </div>
    </main>
</body>
<div class="back-top"></div>

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
<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    $(document).ready(function () {
        $('#example').DataTable();
    });
    
    $('.select-search').select2();
    $(".js-example-basic-multiple").select2();
</script>

@yield('script')

</html>

