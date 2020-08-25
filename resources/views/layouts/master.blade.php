
<!DOCTYPE html>
<html lang="en" class="no-js">
	
<!-- Mirrored from hencework.com/theme/matresume/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 16:34:58 GMT -->
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>ibrahim Sadour</title>
		<meta name="description" content="Matresume is a material CV / Resume / Vcard / Portfolio HTML5 template by hencework." />
		<meta name="keywords" content="material design, resume, responsive template, cv, multipurpose, portfolio, html5 template, themeforest.net, bootstrap, html5, creative, landing page, sass, clean, design, modern, angular js," />
		<meta name="author" content="hencework"/>
		
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