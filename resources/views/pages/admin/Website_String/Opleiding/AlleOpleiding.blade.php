@extends('layouts.AdminDashboard')
<style>
.red_more{

    width: 300px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  overflow: hidden;
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

                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                                    <div class="d-block mb-4 mb-md-0">
                                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                                            <li class="breadcrumb-item"><a href="#">Website String</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Opleiding </li>
                                            </ol>
                                        </nav>
                                        <h2 class="h4">All Opleiding </h2>
                                        <p class="mb-0">Your web Opleiding dashboard template.</p>
                                    </div>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                    @role('admin')
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Share</button>
                                            <button type="button" class="btn btn-sm btn-outline-primary">Export</button>
                                        </div>
                                    @endrole
                                    </div>
                                </div>
                                <div class="table-settings mb-4">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col col-md-6 col-lg-3 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                                                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        @role('admin')
                                        <div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
                                            <div class="btn-group">
                                            <form method="get" action="{{url('auth/dashboard/opleiding/create')}}">
                                                <button  class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" >
                                                        <span class="icon icon-sm icon-gray">
                                                            <span class="fas fa-user-plus"></span>
                                                        </span>
                                                </button>
                                            </form>
                                            </div>
                                        </div>
                                        @endrole
                                    </div>
                                </div>

                                <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                                @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                <p>{{$message}}</p>
                                </div>
                                @endif
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>education name</th>						
                                            <th>place</th>
                                            <th>place</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Item -->
                                        @foreach($website_opleiding as $row)
                                            <tr>
                                                <td>
                                                    <a href="#" class="font-weight-bold">
                                                    {{$row['id']}}
                                                    </a>
                                                </td>
                                                <td class="red_more">
                                                    <span class="font-weight-normal">{{$row['education_name']}}</span>
                                                </td>
                                                <td><span class="font-weight-normal">{{$row['period']}}</span></td>                        
                                                <td><span class="font-weight-normal">{{$row['place']}}</span></td>

                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="icon icon-sm">
                                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                                            </span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><span class="fas fa-eye mr-2"></span>View Details</a>
                                                            @role('admin')
                                                            <a class="dropdown-item" href="{{action('Opleiding\OpleidingUsersController@edit', $row['id'])}}"><span class="fas fa-edit mr-2"></span>Edit</a>
                                                            <a class="dropdown-item text-danger" href="#"><span class="fas fa-trash-alt mr-2"></span>Remove</a>
                                                            @endrole
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="card-footer px-3 border-0 d-flex align-items-center justify-content-between">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="font-weight-bold small">Showing <b>5</b> out of <b>25</b> entries</div>
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