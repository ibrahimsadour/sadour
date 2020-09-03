@extends('layouts.AdminDashboard')

@section('title', '| Users')

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
                                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                                            </ol>
                                        </nav>
                                        <h2 class="h4">All Users</h2>
                                        <p class="mb-0">Your User Administration dashboard .</p>
                                    </div>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                    @role('Admin')
                                        <div class="btn-group">
                                        <a href="{{url('auth/dashboard/setting/roles')}}" class="btn btn-default pull-right"> <i class="fa fa-users"></i>   Roles</a>
                                        <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right"><i class="fa fa-cog"></i> Permissions</a>                                        </div>
                                    @endrole
                                    </div>
                                </div>

                        <div class="col-lg-10 col-lg-offset-1">
                            <h1 class="h4"><i class="fa fa-user"></i> User Administration </h1>
                            

                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date/Time Added</th>
                                            <th>User Roles</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                     
                                        @foreach ($users as $user)
                                        <tr>

                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                            @if($user->roles()->pluck('name')->implode(' ') == 'Admin')
                                            <td style="color:#05a677;font-weight: 700;">{{ $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                            @else
                                            <td style="color: orange; font-weight: 700;">{{ $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                            @endif
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="icon icon-sm">
                                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                                        </span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="../invoice.html"><span class="fas fa-eye mr-2"></span>View Details</a>
                                                        @role('Admin')
                                                        <a class="dropdown-item" href="{{ route('auth.dashboard.setting.edit', $user->id) }}" style="color:navy;"><span class="fas fa-edit mr-2"></span>Edit</a> 
                                                        <form method="post" class="delete_form" action="{{ route('setting.destroy', $user->id) }}">
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
                            <a href="{{ route('auth.dashboard.setting.create') }}" class="btn btn-primary"><span class="fas fa-user-plus"></span> Add User</a>
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