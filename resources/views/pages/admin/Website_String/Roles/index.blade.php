@extends('layouts.AdminDashboard')

@section('title', '| Users')
<style>
.red_more{

    width: 300px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  overflow: hidden;
}


.alert{
    margin-bottom: 0rem;
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
.aanapssen{
    text-align: center;
    font-weight: 700;
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
                                            <li class="breadcrumb-item"><a href="#">User Administration</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Roles</li>
                                            </ol>
                                        </nav>
                                        <h2 class="h4">All Roles</h2>
                                        <p class="mb-0">Your Roles Administration dashboard .</p>
                                    </div>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                    @role('Admin')
                                        <div class="btn-group">
                                        <a href="{{route('auth.dashboard.users')}}" class="btn btn-default pull-right"> <i class="fa fa-users"></i>   Users</a>
                                        <a href="{{url('/auth/dashboard/permission')}}" class="btn btn-default pull-right"><i class="fa fa-cog"></i> Permissions</a>                                        </div>
                                    @endrole
                                    </div>
                                </div>

                        <div class="col-lg-10 col-lg-offset-1">
                                 @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                <p class="aanapssen">{{$message}}</p>
                                </div>
                                @endif
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th>Role</th>
                                            <th>Permissions</th>
                                            <th>Operation</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                     
                                        @foreach ($roles as $role)
                                        <tr>

                                            @if($role->name== 'Admin')
                                            <td style="color:#05a677;font-weight: 700;">{{ $role->name }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                            @elseif($role->name== 'Editor')
                                            <td style="color: 0057ff; font-weight: 700;">{{ $role->name }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                            @else
                                            <td style="color: orange; font-weight: 700;">{{ $role->name }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}

                                            @endif
                                            <td>{{ str_replace(array('[',']','"'),'',   $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}</td>
                                           
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="icon icon-sm">
                                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                                        </span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href=""><span class="fas fa-eye mr-2"></span>View Details</a>
                                                        @role('Admin')
                                                        <a class="dropdown-item" href="{{ route('auth.dashboard.roles.edit', $role->id) }}" style="color:navy;"><span class="fas fa-edit mr-2"></span>Edit</a> 
                                                        <form method="post" class="delete_form" action="{{ route('roles.destroy', $role->id) }}">
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
                            @role('Admin')
                            <a href="{{ route('auth.dashboard.roles.create') }}" class="btn btn-primary"><span class="fas fa-user-plus"></span> Add Role </a>
                            @endrole
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