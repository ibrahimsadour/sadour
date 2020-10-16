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
                                            <h3>Edit all text of the Site</h3>
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
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary"
                                                        onclick="history.back();">
                                                        <i class="fas fa-backward"></i> back
                                                </button>
                                            </div>
                                            <br>
                                        <form method="post" action="{{route('admin.hobbys.update',$hobbies -> id)}}">
                                            {{csrf_field()}}

                                            <input name="id" value="{{$hobbies -> id}}" type="hidden">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> hobby name  - {{__('messages.'.$hobbies -> translation_lang)}} </label>
                                                        <input type="text" value="{{$hobbies -> name}}" id="name"
                                                                class="form-control"
                                                                name="hobby[0][name]">
                                                        @error("hobby.0.name")
                                                        <span class="text-danger"> This field is required (Name)</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Slug - {{__('messages.'.$hobbies -> translation_lang)}} </label>
                                                        <input type="text" value="{{$hobbies -> slug}}" id="name"
                                                                class="form-control"
                                                                name="hobby[0][slug]">
                                                        @error("hobby.0.name")
                                                        <span class="text-danger"> This field is required (Slug)</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6 hidden">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Language abbreviation  {{__('messages.'.$hobbies -> translation_lang)}} </label>
                                                        <input type="text" id="abbr"
                                                                class="form-control"
                                                                placeholder="  "
                                                                value="{{$hobbies -> translation_lang}}"
                                                                name="hobby[0][abbr]">

                                                        @error("hobby.0.abbr")
                                                        <span class="text-danger">This field is required (abbr)</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1"
                                                                name="hobby[0][active]"
                                                                id="switcheryColor4"
                                                                class="switchery" data-color="success"
                                                                @if($hobbies -> active == 1)checked @endif/>
                                                        <label for="switcheryColor4"
                                                                class="card-title ml-1">status {{__('messages.'.$hobbies -> translation_lang)}} </label>

                                                        @error("hobby.0.active")
                                                        <span class="text-danger"> </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit"  value="Update"class="btn btn-primary" />
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
