<!-- ## Ibrahim Sadour ## www.sadour.nl -->
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
    <meta name="title" content="Ibrahim Sadour ">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content=""/>
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
    <link  href="{{URL::asset('projects/style.css')}}" rel="stylesheet" />
        
</head>

<body id="body" data-ng-app="contactApp">

<!-- Header -->
@include('Projects.includes.header')
<!-- End Header  -->

    <!--Left Sidebar--> 
    <!-- resources/views/sections/LeftSidebar.blade.php -->
    @include('Projects.includes.LeftSidebar')
    <!--/Left Sidebar-->

    <!--Main Content-->
    <div class="main-content relative">
    <div class="container">
<!-- Header -->
@include('Projects.includes.categoriesName')
<!-- End Header  -->


<!-- Header -->
@include('Projects.projects')
<!-- End Header  -->


<!--Footer of the website  -->
@include('Projects.includes.footer')
<!-- end footer -->