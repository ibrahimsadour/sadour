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

                                                <form method="post" action="{{route('admin.experience.update',$experiences -> id)}}">
                                                    {{csrf_field()}}

                                                    <input name="id" value="{{$experiences -> id}}" type="hidden">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> Company name - {{__('messages.'.$experiences  -> translation_lang)}} </label>
                                                                <input type="text"  name="experience[0][company_name]" class="form-control" placeholder="company name" required value="{{$experiences -> company_name}}"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> Slug - {{__('messages.'.$experiences  -> translation_lang)}} </label>
                                                                <input type="text"  name="experience[0][slug]" class="form-control" placeholder="company slug" required value="{{$experiences -> slug}}"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> Place - {{__('messages.'.$experiences  -> translation_lang)}} </label>
                                                                <input type="text"  name="experience[0][place]" class="form-control" placeholder="company place" required value="{{$experiences -> place}}"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> Period - {{__('messages.'.$experiences  -> translation_lang)}} </label>
                                                                <input type="text"  name="experience[0][period]" class="form-control" placeholder="company period" required value="{{$experiences -> period}}"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> Description - {{__('messages.'.$experiences  -> translation_lang)}} </label>
                                                                <textarea  name="experience[0][description]" class="form-control" placeholder="company description" requiredrows="4" cols="50" value="{{$experiences -> description}}" >{{$experiences -> description}}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="projectinput1"> Language abbreviation {{__('messages.'.$experiences  -> translation_lang)}} </label>
                                                            <input type="text" class="form-control" value="{{$experiences->translation_lang}}"
                                                                    name="experience[0][abbr]" disabled>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                            status {{__('messages.'.$experiences -> translation_lang)}}
                                                                <div class="form-group mt-1">
                                                                    <label class="switch">
                                                                        <input type="checkbox" value="1"
                                                                                name="experience[0][active]"
                                                                                id="switcheryColor4"
                                                                                class="switchery" data-color="success"
                                                                                @if($experiences -> active == 1)checked @endif/>
                                                                                <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="form-group">
                                                        <input type="submit" value="Update" class="btn btn-primary" />
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