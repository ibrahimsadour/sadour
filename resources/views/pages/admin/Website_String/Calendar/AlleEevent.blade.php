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
                                            <li class="breadcrumb-item"><a href="#" ><span class="fas fa-home"></span></a></li>
                                            <li class="breadcrumb-item"><a href="#">Calendar</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">All Event</li>
                                            </ol>
                                        </nav>
                                        <h2 class="">All Event</h2>
                                    </div>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                    @role('Admin')
                                        <div class="btn-group">
                                            <form action="{{URL('/auth/dashboard/calendar')}}">
                                                <button  class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" id="addevent" type="submit">
                                                        <span class="icon icon-sm icon-gray" >
                                                            <span class="fas fa-calendar-alt" aria-hidden="true" style="font-size: 2.5rem;" ></span>
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
                                <p  class="aanapssen" >{{$message}}</p>
                                </div>
                                @endif
                                <table class="table table-hover display" id="myTable" style="border-color: #eaedf2;width:100%; margin-bottom: 10px;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>						
                                            <th>Start Time</th>						
                                            <th>End Time</th>
                                            <th>All Day</th>
                                            <th>color</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <!-- Item -->
                                        @foreach($calendar_event as $row)
                                            <tr >
                                                <td>
                                                    <a href="#" class="font-weight-bold">
                                                    {{$row['id']}}
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="font-weight-normal" >{{$row['title']}}</span>
                                                </td>
                                                <td><span class="font-weight-normal">{{$row['start']}}</span></td>                        
                                                <td><span class="font-weight-normal">{{$row['end']}}</span></td>
                                                <td><span class="font-weight-bold">
                                                <?php if($row['allDay'] === 1){ echo '<span style="color:green;">All Day</span>';}else  echo '<span style="color:red;">Partial</span>' ?>    
                                                </span></td>
                                                
                                                <td><input type="color" value="{{$row['textColor']}}" disabled><span class="font-weight-normal"></span></td>

                                                <td >
                                                    <div class="btn-group">
                                                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="icon icon-sm">
                                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                                            </span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href=""><span class="fas fa-eye mr-2"></span>View Details</a>
                                                            @hasanyrole('Editor|Admin')
                                                            <a class="dropdown-item" href=""><span class="fas fa-edit mr-2"></span>Edit</a>
                                                            @endhasanyrole
                                                            
                                                            @role('Admin')
                                                            <form method="post" class="delete_form" action="{{action('Calendar\CalendarController@destroy', $row['id'])}}">
                                                                
                                                            @method('DELETE')
                                                            @csrf
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
                                @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

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