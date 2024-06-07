<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/materialdesignicons.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.css')) }}" />
<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/theme-default.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />

<!-- Vendor Styles -->
@yield('vendor-style')

<!-- Custom CSS -->
<style>
        /* Your custom CSS styles here */
        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
        }

        .card-custom {
            background-color: #f3f4f6;
            color: #333;
            padding: 15px;
            border-radius: 10px;
        }

        .bg-primary {
            background-color: #4e73df !important;
        }

        .bg-info {
            background-color: #8DEAFE !important;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        .bg-warning {
            background-color: #ffc107 !important;
        }

        .col-md-12,
        .col-lg-4,
        .col-lg-8 {
            margin-bottom: 20px;
        }
    </style>

<!-- Page Styles -->
@yield('page-style')
