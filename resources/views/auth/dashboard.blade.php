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

                        <!-- Dashboard -->
                        <div class="header bg-primary pb-6" >
                            <div class="container-fluid">
                                <div class="header-body">
                                    <div class="row align-items-center py-4">
                                        <div class="col-lg-6 col-7">
                                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                            </ol>
                                        </nav>
                                        </div>
                                        <div class="col-lg-6 col-5 text-right">
                                        <a href="#" class="btn btn-sm btn-neutral">New</a>
                                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                                        </div>
                                    </div>
                                    <!-- Card stats -->
                                    <div class="row">
                                        <!-- Card stats  ( 1 ) -->
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-stats">
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/admin')}}">  Users </h5></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                                <i class="fa fa-users"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\User::all()->count() }}</span>
                                                        <span class="text-nowrap">Aantal gebruiker in de sites</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card stats  ( 2 ) -->
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-stats">
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/ervaring')}}">  Ervaring </h5></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                                <i class="far fa-file-alt"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\ervaring::all()->count() }}</span>
                                                        <span class="text-nowrap">Aantal Ervaring</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card stats  ( 3 ) -->
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-stats">
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/opleiding')}}">  Opleiding </h5></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                                <i  class="fas fa-graduation-cap"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>{{ \App\opleiding::all()->count() }}</span>
                                                        <span class="text-nowrap"> Antal Opleiding</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card stats  ( 4 ) -->
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-stats">
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/watikdoe')}}"> Wat Ik Doe</h5></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                                <i class="fa fa-american-sign-language-interpreting"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                                                        <span class="text-nowrap">Aantal diensten</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Card stats  ( 5 ) -->
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-stats">
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/hobbys')}}"> Hobby's</h5></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                                <i  class="fa fa-cubes"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>{{ \App\hobbys::all()->count() }}</span>
                                                        <span class="text-nowrap">Aantal hobbys</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card stats  ( 6 ) -->
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-stats">
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/contact')}}">Contact</h5></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                                <i class="fa fa-envelope"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\contact::all()->count() }}</span>
                                                        <span class="text-nowrap">Antal berichten    </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card stats  ( 7 ) -->
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-stats">
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/setting')}}">Setting</h5></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                                <i class="fas fa-cog"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2">Rollen aanpassen / Nieuw gebruiker</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card stats  ( 8 ) -->
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-stats">
                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/profile')}}">My Profile</h5></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                                <i class="far fa-user-circle"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2">Hier kan jij je profile aanpassen</span>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Setting-->
                        <!-- resources/views/sections/setting.blade.php -->
                        @include('pages.admin.Website_String.includes.Admin_footer')
                        <!--/Setting-->
                    </main>
                </div>
            </div>
        </div>
@endsection