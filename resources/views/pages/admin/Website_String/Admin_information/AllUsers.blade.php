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
                                            <li class="breadcrumb-item active" aria-current="page">  Admin information </li>
                                            </ol>
                                        </nav>
                                        <h2 class="h4"> Your web Admin information dashboard template.</h2>
                                        <!-- <p class="mb-0">Y  our web Admin information dashboard template.</p> -->
                                    </div>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                    @role('Admin')
                                        <div class="btn-group">
                                            <form method="get" action="{{url('auth/dashboard/admin/create')}}">
                                                <button  class="btn btn-sm btn-outline-primary">Add User
                                                <span class="icon icon-sm icon-gray">
                                                    <span class="fas fa-user-plus"></span>
                                                </span>
                                                </button>
                                            </form>
                                        </div>
                                    @endrole
                                    </div>
                                </div>

                                <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                                @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                <p class="aanapssen" >{{$message}}</p>
                                </div>
                                @endif
                                <table class="table table-hover" id="myTable" style="border-color: #eaedf2;width:100%; margin-bottom: 10px;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>						
                                            <th>description</th>
                                            <th>keywords</th>
                                            <th>date</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>function</th>
                                            <th>show</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Item -->
                                        @foreach($website_strings as $row)
                                            <tr>
                                                <td>
                                                    <a href="#" class="font-weight-bold">
                                                    {{$row['id']}}
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="font-weight-normal">{{$row['name']}}</span>
                                                </td>
                                                <td><span class="font-weight-normal red_more">{{$row['description']}}</span></td>                        
                                                <td ><span class="font-weight-normal red_more ">{{$row['keywords']}}</span></td>
                                                <td><span class="font-weight-bold ">{{$row['date']}}</span></td>
                                                <td><span class="font-weight-bold red_more ">{{$row['Address']}}</span></td>
                                                <td><span class="font-weight-bold ">{{$row['Email']}}</span></td>
                                                <td><span class="font-weight-bold ">{{$row['Phone']}}</span></td>
                                                <td><span class="font-weight-bold red_more ">{{$row['function']}}</span></td>
                                                <td><span class="font-weight-bold">
                                                <?php if($row['view'] === 1){ echo '<span style="color:green;">Yes</span>';}else  echo '<span style="color:red;">NO</span>' ?>
                                                </span></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="icon icon-sm">
                                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                                            </span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{action('Admin\AdminAddUsersController@show', $row['id'])}}"><span class="fas fa-eye mr-2"></span>View Details</a>
                                                            @role('Admin')
                                                            <a class="dropdown-item" href="{{action('Admin\AdminAddUsersController@edit', $row['id'])}}"><span class="fas fa-edit mr-2"></span>Edit</a>
                                                            <a class="dropdown-item text-danger" href="#"><span class="fas fa-trash-alt mr-2"></span>Remove</a>
                                                            @endrole
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>