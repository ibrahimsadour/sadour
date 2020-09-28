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
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                                        </ol>
                                    </nav>
                                    <h2 class="h4">All Projects</h2>
                                </div>
                                <div class="btn-toolbar mb-2 mb-md-0">
                                @role('Admin')
                                    <div class="btn-group">
                                    <form method="get" action="{{url('auth/dashboard/projects/create')}}">
                                        <button  class="btn btn-sm btn-outline-primary"> Add New Projects  <span class="icon icon-sm icon-gray"><i class="fab fa-r-project"></i></span></button>
                                    </form>
                                    </div>
                                @endrole

                                </div>
                            </div>

                            <table class="table table-hover" id="myTable" style="border-color: #eaedf2;width:100%; margin-bottom: 10px;">
                                <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Image</th>

                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($Projects as $Project)
                                    <tr class="projectRow{{$Project -> id}}">
                                        <th scope="row">{{$Project -> id}}</th>
                                        <td>{{$Project -> name}}</td>
                                        <td>{{$Project -> description}}</td>
                                        <td><img  style="width: 90px; height: 90px;" src="{{asset('images/Projects/'.$Project->photo)}}"></td>

                                        <td >
                                            <div class="btn-group">
                                                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="icon icon-sm">
                                                        <span class="fas fa-ellipsis-h icon-dark"></span>
                                                    </span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('ajax.project.show',$Project->id)}}"><span class="fas fa-eye mr-2"></span>View Details</a>
                                                    @hasanyrole('Editor|Admin')
                                                    <a class="dropdown-item" href="{{route('ajax.project.edit',$Project->id)}}"><span class="fas fa-edit mr-2"></span>Edit</a>
                                                    @endhasanyrole
                                                    
                                                    @role('Admin')
                                                    <a class="delete_btn dropdown-item"  project_id="{{$Project -> id}}"   href=""><span class="fas fa-edit mr-2"></span>Remove</a>
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
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script
    src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable();
    } );

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //get provider branches
    $(document).on('click', '.delete_btn', function (e) {
        e.preventDefault();
        var project_id = $(this).attr('project_id');
    
        $.ajax({
            type: 'post',
            enctype:"multipart/form-data",
            url:  "{{route('ajax.project.destroy')}}" +'?_token=' + '{{ csrf_token() }}',
            data: {
                '_token'   :   $('meta[name="csrf_token"]').attr('content'),
                "id" : project_id
            },
            
            success: function (data) {

                    if(data.status == true)
                
                    swal("Done!", data.msg, "success");
                    
                    $('.projectRow'+ data.id).remove();

            },error: function (data){

                    if(data.status == false)
                    // alert(data.  msg)
                    swal("Error!", data.msg, "error");
                
            }
        });
    });
</script>
