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

                                        <form method="post" action="{{route('admin.hobbys.store')}}">
                                            {{csrf_field()}}
                                            @if(get_languages() -> count() > 0)
                                                @foreach(get_languages() as $index => $lang)

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> hobby name - {{__('messages.'.$lang -> abbr)}} </label>
                                                            <input type="text" value="" id="name"
                                                                    class="form-control"
                                                                    placeholder="  "
                                                                    name="hobby[{{$index}}][name]">
                                                            @error("hobby.$index.name")
                                                            <span class="text-danger"> This field is required (Name)</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Slug - {{__('messages.'.$lang -> abbr)}}
                                                            </label>
                                                            <input type="text" id="name"
                                                                    class="form-control"
                                                                    placeholder="  "
                                                                    value="{{old('slug')}}"
                                                                    name="hobby[{{$index}}][slug]">
                                                            @error("hobby.$index.name")
                                                            <span class="text-danger"> This field is required (Slug)</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6 hidden">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Language abbreviation {{__('messages.'.$lang -> abbr)}} </label>
                                                            <input type="text" id="abbr"
                                                                    class="form-control"
                                                                    placeholder="  "
                                                                    value="{{$lang -> abbr}}"
                                                                    name="hobby[{{$index}}][abbr]">

                                                            @error("hobby.$index.abbr")
                                                            <span class="text-danger">This field is required (abbr)</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-1">
                                                                <input type="checkbox" value="1"
                                                                        name="hobby[{{$index}}][active]"
                                                                        id="switcheryColor4"
                                                                        class="switchery" data-color="success"
                                                                        checked/>
                                                                <label for="switcheryColor4"
                                                                        class="card-title ml-1">ststus  {{__('messages.'.$lang -> abbr)}} </label>

                                                                @error("hobby.$index.active")
                                                                <span class="text-danger"> </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
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