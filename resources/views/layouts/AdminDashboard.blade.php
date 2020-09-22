<!--

=========================================================
* Ibrahim Sadour -  Admin Dashboard
=========================================================
-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title> Ibrahim Sadour Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Ibrahim Sadour Dashboard">
<meta name="author" content="Ibrahim Sadour">
<meta name="description" content="ik ben verantwoordelijk voor het ontwerpen, coderen en aanpassen van websites, van lay-out tot functie en volgens de specificaties van de klant. Streef ernaar om visueel aantrekkelijke sites te maken met een gebruiksvriendelijk ontwerp en duidelijke navigatie.">
<meta name="keywords" content="graphic design, web design,website design,website builder,web developer,web designer
,webdesign, ecommerce website, web design company, website creator, website designer, responsive web design, web development company, best website design,web design software,web page design,build a website,web developer salary
,design website,web design courses,how to design a website,web design inspiration,website layout,web designer salary,web application development" />
<link rel="canonical" href="https://sadour.nl/">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Open Graph / Facebook -->
<meta property="og:type" content="Ibrahim Sadour">
<meta property="og:url" content="https://sadour.nl/">
<meta property="og:title" content="Ibrahim Sadour Dashboard">
<meta property="og:description" content="Ibrahim Sadour, I am responsible for designing, coding and customizing websites, from layout to function and according to customer specifications. Strive to create visually appealing sites with a user-friendly design and clear navigation.">
<meta property="og:image" content="/img/admin/logo_site.png">

<!-- Twitter -->
<meta property="twitter:card" content="Ibrahim Sadour">
<meta property="twitter:url" content="https://sadour.nl/">
<meta property="twitter:title" content="Ibrahim Sadour Dashboard">
<meta property="twitter:description" content="Ibrahim Sadour, I am responsible for designing, coding and customizing websites, from layout to function and according to customer specifications. Strive to create visually appealing sites with a user-friendly design and clear navigation.">
<meta property="twitter:image" content="/img/admin/logo_site.png">

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
<link type="text/css" href="{{asset('admin_dashboard/css/style.css') }}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

<!-- tabeldate CSS -->
<link  href="{{asset('css/dataTables.min.css')}}" rel="stylesheet" >
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<!-- #################################################### -->
<!-- End tabeldate -->

</head>

<body class="bg-soft">

@yield('login_form')
@yield('verify_login_user')
@yield('rest_password')
@yield('rest_password_with_email')
@yield('register_form')
@yield('Dashboard')

@yield('add-adata')

<!-- tabelDate Js -->
<script src="{{asset('js/dataTables.min.js')}}" type="text/javascript" ></script>

<!-- End tabeldate -->

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