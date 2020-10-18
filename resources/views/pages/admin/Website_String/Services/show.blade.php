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
                                                <label for="projectinput1"> services Title  - {{__('messages.'.$services -> translation_lang)}} </label>
                                                <input type="text" value="{{$services -> titel}}" id="titel"
                                                        class="form-control"
                                                        disabled >
                                            </div>
                                            <div class="form-group">
                                                <label for="projectinput1"> Slug - {{__('messages.'.$services -> translation_lang)}} </label>
                                                <input type="text" value="{{$services -> slug}}" id="slug"
                                                        class="form-control"
                                                        disabled >
                                            </div>
                                            <div class="form-group">
                                                <label for="projectinput1"> Language abbreviation  {{__('messages.'.$services -> translation_lang)}} </label>
                                                <input type="text" id="abbr"
                                                        class="form-control"
                                                        placeholder="  "
                                                        value="{{$services -> translation_lang}}"
                                                        disabled >
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Description - {{__('messages.'.$services -> translation_lang)}} </label>
                                                <textarea   class="form-control view"  value="{{$services->description}}"  disabled rows="4" cols="50">{{$services->description}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-group" >status {{__('messages.'.$services -> translation_lang)}} </div>
                                                <label class="switch">
                                                    <input type="checkbox" class="form-control" value="{{$services -> active}}" <?php if($services -> active == 1){echo"checked";} ?> disabled >
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