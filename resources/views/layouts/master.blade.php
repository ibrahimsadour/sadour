
<!DOCTYPE html>
<html lang="en" class="no-js">
	
<!-- Mirrored from hencework.com/theme/matresume/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 16:34:58 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>@foreach($website_strings as $strings){{$strings ->name}}@endforeach</title>
	<meta name="title" content="Ibrahim Sadour ">
	<meta name="description" content="{{$strings ->description}}" />
	<meta name="keywords" content="{{$strings ->keywords}}" />
	<meta name="author" content="{{$strings ->name}}"/>
	<link rel="canonical" href="https://sadour.nl/">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="Ibrahim Sadour">
	<meta property="og:url" content="https://sadour.nl/">
	<meta property="og:title" content="Ibrahim Sadour ">
	<meta property="og:description" content="Ibrahim Sadour, I am responsible for designing, coding and customizing websites, from layout to function and according to customer specifications. Strive to create visually appealing sites with a user-friendly design and clear navigation.">
	<meta property="og:image" content="/img/admin/logo_site.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="Ibrahim Sadour">
	<meta property="twitter:url" content="https://sadour.nl/">
	<meta property="twitter:title" content="Ibrahim Sadour ">
	<meta property="twitter:description" content="Ibrahim Sadour, I am responsible for designing, coding and customizing websites, from layout to function and according to customer specifications. Strive to create visually appealing sites with a user-friendly design and clear navigation.">
	<meta property="twitter:image" content="/img/admin/logo_site.png">
	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!--CSS-->
	<!--- {{URL::asset('********')}}   dit is een helper functie in PHP -->
	<link  href="{{URL::asset('css/style.css')}}" rel="stylesheet" />
</head>

<body id="body" data-ng-app="contactApp">

<!-- Header -->
@include('includes.header')
<!-- End Header  -->

<!-- Content of the website -->
@yield('content')
<!-- end content -->



<!--Footer of the website  -->
@include('includes.footer')
<!-- end footer -->