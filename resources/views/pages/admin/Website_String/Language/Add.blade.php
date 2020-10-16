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
                                        <h3 aling="center">Add Hobbys</h3>
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

                                        <form method="post" action="{{route('admin.languages.store')}}">
                                            {{csrf_field()}}

                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary" onclick="history.back();">Back</button>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="weergeven">name :</label>
                                                <input type="text" name="name" class="form-control" placeholder="Language name" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="weergeven">abbreviation :</label>
                                                <input type="text" name="abbr" class="form-control" placeholder="Language abbreviation " required />
                                            </div>
                                            <div class="form-group">
                                                <label for="direction">direction :</label>
                                                <select name="direction" class="select2 form-control">
                                                    <optgroup label="Please choose the language direction ">
                                                        <option value="rtl">From right to left</option>
                                                        <option value="ltr">From left to right</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="weergeven">Active :</label>
                                                <select name="active" id="active" class="form-control" style="font-weight: 700;">
                                                    <optgroup label="Please choose the language status ">
                                                        <option value="1" style="color:green; font-weight: 700;">Yes</option>
                                                        <option value="0" style="color:red; font-weight: 700; ">NO</option>
                                                    </optgroup>
                                                </select>
                                                <small id="weergeven_error" class="form-text text-danger"></small>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" />
                                            </div>
                                            <br>

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