@extends('layouts.AdminDashboard')

<style>
.bg-gradient-info{
    background: #14bdef!important;
}
.bg-gradient-green{
    background:linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important
}
.bg-gradient-red {
    background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important
}
.bg-gradient-orange{
    background:linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;  
}
.icon-shape i, .icon-shape svg {
    font-size: 1.50rem;
}
.breadcrumb {
    display: flex !important;
    margin-bottom: 1rem !important;
    padding: .75rem 1rem !important;
    list-style: none !important;
    border-radius: .375rem !important;
    background-color: #e9ecef !important;
    flex-wrap: wrap !important;
}
.card-stats{
    padding-left: 0rem!important;
}
 
</style>

@section('Dashboard')
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="{{asset('img/admin/logo_site.png')}}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{asset('img/admin/logo_site.png')}}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

        <div class="container-fluid bg-soft">
            <div class="row">
                <div class="col-12">
                    <!--Setting-->
                    <!-- resources/views/sections/setting.blade.php -->
                    @include('pages.admin.Website_String.includes.Admin_LeftSidebar')
                    <!--/Setting-->

                    <main class="content">

                        <!--Setting-->
                        <!-- resources/views/sections/setting.blade.php -->
                        @include('pages.admin.Website_String.includes.Admin_header')
                        <!--/Setting-->

                        

                        <!--pagevistors.blade-->
                        <!-- resources/views/pages/admin/website_string/pagevistors.blade.php -->
                        @include('pages.admin.Website_String.Dashboard.daschboard_Card')
                        <!--pagevistors.blade-->

                        <!--pagevistors.blade-->
                        <!-- resources/views/pages/admin/website_string/pagevistors.blade.php -->
                        @include('pages.admin.Website_String.Dashboard.pagevistors')
                        <!--pagevistors.blade-->

                        <!--Setting-->
                        <!-- resources/views/sections/setting.blade.php -->
                        @include('pages.admin.Website_String.includes.Admin_footer')
                        <!--/Setting-->
                    </main>
                </div>
            </div>
        </div>
@endsection