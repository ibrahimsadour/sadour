@extends('layouts.AdminDashboard')
<style>
.red_more{

    width: 300px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  overflow: hidden;
}

 

    .alert-success{
        color: black!important;

    }
    .alert-danger{
        color: black!important;

    }
    
    .alert {
    padding: 0rem 1rem!important;
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
                                            <li class="breadcrumb-item active" aria-current="page">Ervaring</li>
                                            </ol>
                                        </nav>
                                        <h2 class="h4">All Ervaring</h2>
                                        <p class="mb-0">Your web Ervaring dashboard template.</p>
                                    </div>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                        @role('Admin')
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Share</button>
                                            <button type="button" class="btn btn-sm btn-outline-primary">Export</button>
                                        </div>
                                        @endrole
                                    </div>
                                </div>
                                <div class="table-settings mb-4">
                                    <div class="row align-items-center justify-content-between">

                                    <!-- hier wordt de Search form geinclude -->
                                    <!-- resources/views/pages/admin/Websit_String.blade.php -->
                                    @include('pages.admin.Website_String.includes.search_form')
                                    <!-- End Search Form -->
                                    
                                        <div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
                                            @role('Admin')
                                            <div class="btn-group">
                                            <form method="get" action="">
                                                <button  class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" disabled >
                                                        <span class="icon icon-sm icon-gray">
                                                            <span class="fas fa-user-plus"></span>
                                                        </span>
                                                </button>
                                            </form>
                                            </div>
                                            @endrole
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                                @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                <p>{{$message}}</p>
                                </div>
                                @endif
                                <table class="table table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>						
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Item -->
                                        @foreach($contact_strings as $row)
                                            <tr>
                                                <td>
                                                    <a href="#" class="font-weight-bold">
                                                    {{$row['id']}}
                                                    </a>
                                                </td>
                                                <td class="red_more">
                                                    <span class="font-weight-normal">{{$row['name']}}</span>
                                                </td>
                                                <td><span class="font-weight-normal">{{$row['email']}}</span></td>                        
                                                <td><span class="font-weight-normal red_more ">{{$row['message']}}</span></td>

                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="icon icon-sm">
                                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                                            </span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{action('Contact\ContactController@show', $row['id'])}}"><span class="fas fa-eye mr-2"></span>View Details</a>
                                                            @role('Admin')
                                                            <form method="post" class="delete_form" action="{{action('Contact\ContactController@destroy', $row['id'])}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <button type="submit"  style="  border: none;background: none; color:red;"><span class="fas fa-trash-alt mr-2"></span>Remove</button>
                                                            </form>
                                                            @endrole
                                                            <!-- <a class="dropdown-item text-danger" href="{{action('Contact\ContactController@destroy', $row['id'])}}"><span class="fas fa-trash-alt mr-2"></span>Remove</a> -->
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