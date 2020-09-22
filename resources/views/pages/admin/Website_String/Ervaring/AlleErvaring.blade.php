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
                                            <li class="breadcrumb-item active" aria-current="page">Experience</li>
                                            </ol>
                                        </nav>
                                        <h2 class="h4">All Experience</h2>
                                        <p class="mb-0">Your web Experience dashboard template.</p>
                                    </div>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                    @role('Admin')
                                        <div class="btn-group">
                                        <form method="get" action="{{url('auth/dashboard/ervaring/create')}}">
                                            <button  class="btn btn-sm btn-outline-primary"> Add Experience  <span class="icon icon-sm icon-gray"><i class="far fa-file"></i></span></button>
                                        </form>
                                        </div>
                                    @endrole

                                    </div>
                                </div>


                                <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                                @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                <p  class="aanapssen" >{{$message}}</p>
                                </div>
                                @endif
                                <table class="table table-hover" id="myTable" id="myTable" style="border-color: #eaedf2;width:100%; margin-bottom: 10px;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>company_name</th>						
                                            <th>place</th>
                                            <th>period</th>
                                            <th>description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Item -->
                                        @foreach($website_ervaring as $row)
                                            <tr >
                                                <td>
                                                    <a href="#" class="font-weight-bold">
                                                    {{$row['id']}}
                                                    </a>
                                                </td>
                                                <td >
                                                    <span class="font-weight-normal" >{{$row['company_name']}}</span>
                                                </td>
                                                <td><span class="font-weight-normal">{{$row['place']}}</span></td>                        
                                                <td><span class="font-weight-normal">{{$row['period']}}</span></td>
                                                <td class="red_more"><span class="font-weight-bold">{{$row['description']}}</span></td>

                                                <td >
                                                    <div class="btn-group">
                                                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="icon icon-sm">
                                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                                            </span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{action('Ervaring\ErvaringUsersController@show', $row['id'])}}"><span class="fas fa-eye mr-2"></span>View Details</a>
                                                            @hasanyrole('Editor|Admin')
                                                            <a class="dropdown-item" href="{{action('Ervaring\ErvaringUsersController@edit', $row['id'])}}"><span class="fas fa-edit mr-2"></span>Edit</a>
                                                            @endhasanyrole
                                                            
                                                            @role('Admin')
                                                            <form method="post" class="delete_form" action="{{action('Ervaring\ErvaringUsersController@destroy', $row['id'])}}">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="_method" value="DELETE" />
                                                                <button type="submit"  style="  border: none;background: none; color:red;"><span class="fas fa-trash-alt mr-2"></span>Remove</button>
                                                            </form>                                                        
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