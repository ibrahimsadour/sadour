@extends('layouts.AdminDashboard')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

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
                                            <li class="breadcrumb-item active" aria-current="page">Hobbys</li>
                                            </ol>
                                        </nav>
                                        <p class="mb-0">Your  Hobbys dashboard template.</p>
                                    </div>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                    @role('Admin')
                                    <div class="btn-group">
                                        <form method="get" action="{{route('admin.hobbys.create')}}" style="margin-right: 10px;">
                                            <button  class="btn btn-sm btn-outline-primary"> Add New Hobbies  <span class="icon icon-sm icon-gray"><i class="fas fa-plus"></i></span></button>
                                        </form>
                                        
                                        <form method="get" action="{{route('Website')}}"  target="_blank">
                                            <button  class="btn btn-sm btn-outline-primary" > Display all on the site  <span cl ass="icon icon-sm icon-gray"><i class="fas fa-eye mr-2"></i></span></button>
                                        </form>
                                    </div>
                                    @endrole

                                    </div>
                                </div>
                                
                                <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                                @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                <p class="aanapssen">{{$message}}</p>
                                </div>
                                @endif
                                <table class="table table-hover"  id="myTable" style="border-color: #eaedf2;width:100%; margin-bottom: 10px;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Language</th>						
                                            <th>Action</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Item -->
                                        @isset($hobbies)
                                            @foreach($hobbies as $row)
                                                <tr>
                                                    <td>
                                                        <a href="#" class="font-weight-bold">
                                                        {{$row['id']}}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span class="font-weight-normal">{{$row['name']}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="font-weight-normal">{{get_default_lang()}}</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="icon icon-sm">
                                                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                                                </span>
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="{{route('admin.hobbys.show',$row -> id)}}"><span class="fas fa-eye mr-2"  style="color:#17a2b8;" ></span>View Details</a>
                                                                @hasanyrole('Editor|Admin')
                                                                <a class="dropdown-item" href="{{route('admin.hobbys.edit',$row -> id)}}"><span class="fas fa-edit mr-2" style="color:#007bff;"></span>Edit</a>
                                                                @endhasanyrole

                                                                @role('Admin')
                                                                <a class="dropdown-item" href="{{route('admin.hobbys.delete',$row -> id)}}"><span class="fas fa-trash-alt mr-2" style="color:#dc3545;"></span>Remove</a>
                                                                
                                                                    @if($row -> active == 0)
                                                                        <a href="{{route('admin.hobbys.status',$row -> id)}}"
                                                                        class="dropdown-item"><span class="fas fa-toggle-on mr-2" style="color:#28a745;"></span> active</a>
                                                                            @else
                                                                        <a href="{{route('admin.hobbys.status',$row -> id)}}"
                                                                        class="dropdown-item"><span class="fas fa-toggle-on mr-2" style="color:#ffc107;"></span> Deactivate</a>
                                                                    @endif
                                                                @endrole
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if($row ->active  == "1") 
                                                         <b style="color:#28a745;">Active</b>
                                                         @else  
                                                         <b style="color:#ffc107;">Inactive</b>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                    </tbody>
                                </table>

                                <!--Setting-->
                                <!-- resources/views/sections/setting.blade.php -->
                                @include('pages.admin.Website_String.includes.Admin_footer')
                                <!--/Setting-->
                        </main>
                    </div>
                </div>
            </div>
@endsection
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>