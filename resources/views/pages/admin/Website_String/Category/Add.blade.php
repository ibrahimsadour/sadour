@extends('layouts.AdminDashboard')
<style>
.form-control {
    margin-bottom: .5rem;
}
.form-text{
    font-weight: 900;
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
                                        <br/>
                                        <h3 aling="center">Add New Project</h3>
                                        <br/>

                                        <form  method="POST" enctype="multipart/form-data" action="{{route('ajax.category.store')}}"  id="projectsForm">
                                            @csrf
                                            {{ method_field('POST') }}
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-success d-none" id="msg_div">
                                                            <span id="res_message"></span>
                                                        </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="Name">Name Category:</label>
                                                <input type="text" class="form-control" name="name" placeholder="name category">
                                                <small id="name_error" class="form-text text-danger"></small>

                                            </div>


                                            <div class="form-group">
                                                <label for="weergeven">weergeven :</label>
                                                <select name="weergeven" id="weergeven" class="form-control" style="font-weight: 700;">
                                                    <option value="1" style="color:green; font-weight: 700;">Yes</option>
                                                    <option value="0" style="color:red; font-weight: 700; ">NO</option>
                                                </select>
                                                <small id="weergeven_error" class="form-text text-danger"></small>
      
                                            </div>

                                            <button id="projects_submit" class="btn btn-primary">Save </button>
                                            
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

<!--Ajax code + text Editor code -->
<!-- resources/views/pages/admin/Website_String/Projects/ajax -->
@include('pages.admin.Website_String.Category.Ajax_code.ajaxAddProject')
<!--/ajax code-->
