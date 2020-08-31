@extends('layouts.AdminDashboard')
<style>
    label {
        font-weight: 600;
        margin-bottom: .5rem;
        display: inline-block;
    }
    .form-control {
        margin-bottom: .5rem;
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


                                <div class="row">
                                    <div class="col-md-12" style="max-width: 50%;"> 
                                        <br />
                                        <h3 aling="center">Add Opleiding</h3>
                                        <br />
                                        @if(count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                            </ul>
                                            </div>
                                            @endif
                                            @if(\Session::has('success'))
                                            <div class="alert alert-success">
                                            <p>{{ \Session::get('success') }}</p>
                                        </div>
                                        @endif

                                        <form method="post" action="{{url('auth/dashboard/opleiding')}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <input type="text" name="education_name" class="form-control" placeholder="education name" required />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="period" class="form-control" placeholder="period" required/>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="place" class="form-control" placeholder="place" required/>
                                            </div>

                                            <!-- <div class="form-group">
                                                <textarea  name="description" class="form-control" placeholder="description" required  rows="4" cols="50"></textarea>
                                            </div> -->


                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" />
                                            </div>
                                        </form>
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