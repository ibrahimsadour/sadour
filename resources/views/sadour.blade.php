<!-- resources/views/layouts/master.blade.php -->
@extends('layouts.master')
<!-- master -->

<!-- in deze sectie wordt alle content van de website toegoevogd.. -->
@section('content')


    <!--Left Sidebar--> 
    <!-- resources/views/sections/LeftSidebar.blade.php -->
    @include('sections.LeftSidebar')
    <!--/Left Sidebar-->
        

    <!--Setting-->
    <!-- resources/views/sections/setting.blade.php -->
    @include('sections.Setting')
    <!--/Setting-->
        
    <!--Main Content-->
    <div class="main-content relative">
        <div class="container">

            <!--About Sec-->
            <!-- resources/views/sections/About.blade.php -->
            @include('sections.About')
            <!--/About Sec-->		
            
            <!--Skills Sec-->
            <!-- resources/views/sections/Skills.blade.php -->
            @include('sections.Skills')
            <!--/Skills Sec-->
            
            <!--Profile Sec-->
            @include('sections.Profile')
            <!--/Profile Sec-->
            
        
        
            <!--Hobby's Sec-->
            @include('sections.Hobby')
            <!--/Hobby's Sec-->
            
            <!--Experience Sec-->
            @include('sections.Experience')
            <!--/Experience Sec-->
            
            <!--Education Sec-->
            @include('sections.Education')
            <!--/Education Sec-->
            
            
            
            <!--References Sec-->
            @include('sections.References')
            <!--/References Sec-->
            
            <!--Client Sec-->
            @include('sections.Client')
            <!--/Client Sec-->
            <!-- contact -->

            
            <!--Contact Sec-->
            @include('sections.contact')
            <!--/Contact Sec-->
            
        <!-- End contener -->
    <!--End main Content-->
					
@endsection
