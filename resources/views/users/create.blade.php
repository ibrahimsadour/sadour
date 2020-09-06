@extends('layouts.AdminDashboard')

@section('title', '| Add User')
<style>
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

                <div class='col-lg-4 col-lg-offset-4'>

                    <h1 class="h4"><i class='fa fa-user-plus'></i> Add User</h1>
                    <hr>
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                            <li class="aanapssen">{{$error}}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
                        @if(\Session::has('success'))
                        <div class="alert alert-success">
                        <p class="aanapssen">{{ \Session::get('success') }}</p>
                    </div>
                    @endif
                    {{ Form::open(array(
                    'action' => array('Setting\SettingUsersController@store'),
                    'method' => 'POST')) }}


                    <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', '', array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', '', array('class' => 'form-control')) }}
                    </div>

                    <div class='form-group'>
                    @foreach ($roles as $role)
                        {{ Form::checkbox('roles[]',  $role->id ) }}
                        {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                    @endforeach
                    </div>

                    <div class="form-group">
                    {{ Form::label('password', 'Password') }}<br>
                    {{ Form::password('password', array('class' => 'form-control')) }}

                    </div>

                    <div class="form-group">
                    {{ Form::label('password', 'Confirm Password') }}<br>
                    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

                    </div>

                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}

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