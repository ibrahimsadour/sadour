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
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #28a745;
}

input:focus + .slider {
  box-shadow: 0 0 1px #28a745;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
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
                                                <label for="projectinput1"> hobby name  - {{__('messages.'.$hobbies -> translation_lang)}} </label>
                                                <input type="text" value="{{$hobbies -> name}}" id="name"
                                                        class="form-control"
                                                        disabled >
                                            </div>
                                            <div class="form-group">
                                                <label for="projectinput1"> Slug - {{__('messages.'.$hobbies -> translation_lang)}} </label>
                                                <input type="text" value="{{$hobbies -> slug}}" id="name"
                                                        class="form-control"
                                                        disabled >
                                            </div>
                                            <div class="form-group">
                                                <label for="projectinput1"> Language abbreviation  {{__('messages.'.$hobbies -> translation_lang)}} </label>
                                                <input type="text" id="abbr"
                                                        class="form-control"
                                                        placeholder="  "
                                                        value="{{$hobbies -> translation_lang}}"
                                                        disabled >
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group" >status {{__('messages.'.$hobbies -> translation_lang)}} </div>
                                                <label class="switch">
                                                    <input type="checkbox" class="form-control" value="{{$hobbies -> active}}" <?php if($hobbies -> active == 1){echo"checked";} ?>  >
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

<label class="switch"> status {{__('messages.'.$hobbies -> translation_lang)}}
    <input type="checkbox" class="form-control" value="{{$hobbies -> active}}" <?php if($hobbies -> active == 1){echo"checked";} ?>  >
    <span class="slider round"></span>
</label>