@extends('layouts.AdminDashboard')
<style>
label {
    font-weight: 600;
    margin-bottom: .5rem;
    display: inline-block;
}
.view {
       margin-bottom: .5rem;
       background-color: #2e3650!important;
        color: white!important ;
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
                                            <div class="form-group">
                                                <a href="{{route('category.all')}}" class="btn btn-default pull-right breadcrumb-item "> <i class="	fa fa-angle-double-left"> Terug naar Alle categorys </a></i> 
                                            </div>

                                                <div class="form-group">
                                                    <label for="name">Id</label>
                                                    <input type="text"  class="form-control view" value="{{$categorys->id}}" disabled/>
                                                </div>
                                                
                                                <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text"  class="form-control view" value="{{$categorys->name}}"disabled/>
                                                </div>

                                                <div class="form-group">
                                                <label for="name">Name Url</label>
                                                <input type="text"  class="form-control view" value="{{$categorys->name_url}}"disabled/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">Description</label>
                                                    <textarea   class="form-control view"    disabled rows="4" cols="50">{{$categorys->description}}</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">Weergeven</label>
                                                    <input   class="form-control view"    disabled  value="{{$categorys->weergeven}}"/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="Title">Title Category:</label>
                                                    <input type="text" class="form-control view" disabled value="{{$categorys->title}}">
                                                    <small id="title_error" class="form-text text-danger"></small>
                                                </div>

                                                <div class="form-group">
                                                    <label for="Title">Keywords:</label>
                                                    <textarea disabled class="form-control view"  required   value="{{$categorys->keywords}}">{{$categorys->keywords}}
                                                    </textarea>
                                                    <small id="keywords_error" class="form-text text-danger"></small>
                                                </div>

                                                <div class="form-group">
                                                    <label for="Title">description_back:</label>
                                                    <textarea disabled class="form-control view"  required  rows="4" cols="50" value="{{$categorys->description_back}}">{{$categorys->description_back}}
                                                    </textarea>
                                                    <small id="description_back_error" class="form-text text-danger"></small>
                                                </div>


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