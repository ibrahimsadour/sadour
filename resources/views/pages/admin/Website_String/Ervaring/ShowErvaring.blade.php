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
                                                    <button type="button" class="btn btn-primary"
                                                            onclick="history.back();">
                                                            <i class="fas fa-backward"></i> back
                                                    </button>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                <label for="name">company name - {{__('messages.'.$experiences -> translation_lang)}} </label>
                                                <input type="text"  class="form-control view" value="{{$experiences->company_name}}" placeholder="Enter name" disabled/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">place - {{__('messages.'.$experiences -> translation_lang)}}</label>
                                                    <input type="text"  class="form-control view" value="{{$experiences->place}}" placeholder="Enter description" disabled/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">period - {{__('messages.'.$experiences -> translation_lang)}}</label>
                                                    <input type="text"  class="form-control view" value="{{$experiences->period}}" placeholder="Enter keywords" disabled/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">Description - {{__('messages.'.$experiences -> translation_lang)}} </label>
                                                    <textarea   class="form-control view"  value="{{$experiences->description}}"  disabled rows="4" cols="50">{{$experiences->description}}</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="projectinput1"> Slug - {{__('messages.'.$experiences -> translation_lang)}} </label>
                                                    <input type="text" value="{{$experiences -> slug}}" id="name"
                                                            class="form-control"
                                                            disabled >
                                                </div>

                                                <div class="form-group">
                                                    <label for="projectinput1"> Language abbreviation  {{__('messages.'.$experiences -> translation_lang)}} </label>
                                                    <input type="text" id="abbr"
                                                            class="form-control"
                                                            placeholder="  "
                                                            value="{{$experiences -> translation_lang}}"
                                                            disabled >
                                                </div>

                                                <div class="form-group" >status {{__('messages.'.$experiences -> translation_lang)}} </div>
                                                    <label class="switch">
                                                        <input type="checkbox" class="form-control" value="{{$experiences -> active}}" <?php if($experiences -> active == 1){echo"checked";} ?>  >
                                                        <span class="slider round"></span>
                                                    </label>
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