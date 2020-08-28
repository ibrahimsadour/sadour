<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title> Ibrahim Sadour Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt Bootstrap 5 Dashboard - Sign in page">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/volt">
<meta property="og:title" content="Volt Bootstrap 5 Dashboard - Sign in page">
<meta property="og:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/volt">
<meta property="twitter:title" content="Volt Bootstrap 5 Dashboard - Sign in page">
<meta property="twitter:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('favicon.ico') }}">
<!-- <link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin_dashboard/assets/img/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin_dashboard/assets/img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin_dashboard/assets/img/favicon/favicon-16x16.png') }}"> -->
<link rel="manifest" href="{{asset('admin_dashboard/assets/img/favicon/site.webmanifest') }}">
<link rel="mask-icon" href="{{asset('admin_dashboard/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css"  href="{{asset('admin_dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

<!-- Notyf -->
<link  type="text/css" href="{{asset('admin_dashboard/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="{{asset('admin_dashboard/css/volt.css') }}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body class="bg-soft">

@yield('login_form')
@yield('register_form')
@yield('Dashboard')

@yield('add-adata')


<!-- Core -->
<script src="{{asset('admin_dashboard/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{asset('admin_dashboard/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Vendor JS -->
<script src="{{asset('admin_dashboard/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

<!-- Slider -->
<script src="{{asset('admin_dashboard/vendor/nouislider/distribute/nouislider.min.js') }}"></script>

<!-- Jarallax -->
<script src="{{asset('admin_dashboard/vendor/jarallax/dist/jarallax.min.js') }}"></script>

<!-- Smooth scroll -->
<script src="{{asset('admin_dashboard/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

<!-- Count up -->
<script src="{{asset('admin_dashboard/vendor/countup.js/dist/countUp.umd.js') }}"></script>

<!-- Notyf -->
<script src="{{asset('admin_dashboard/vendor/notyf/notyf.min.js') }}"></script>

<!-- Charts -->
<script src="{{asset('admin_dashboard/vendor/chartist/dist/chartist.min.js') }}"></script>
<script src="{{asset('admin_dashboard/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

<!-- Datepicker -->
<script src="{{asset('admin_dashboard/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

<!-- Simplebar -->
<script src="{{asset('admin_dashboard/vendor/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="{{asset('admin_dashboard/assets/js/volt.js') }}"></script>

    
</body>

</html>