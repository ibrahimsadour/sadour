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
                        @include('pages.admin.Admin_LeftSidebar')
                        <!--/Setting-->

                        <main class="content">




                                <!--Setting-->
                                <!-- resources/views/sections/setting.blade.php -->
                                @include('pages.admin.Admin_header')
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

                                                 <form method="post" action="{{action('Opleiding\OpleidingUsersController@update',['opleiding' => $website_opleiding->id])}}">
                                                        {{csrf_field()}}
                                                        {{ method_field('PATCH') }}
                                                        <div class="form-group">
                                                        <label for="name">Education name</label>
                                                        <input type="text" name="education_name" class="form-control" value="{{$website_opleiding->education_name}}" placeholder="Enter education name" />
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="name">place</label>
                                                        <input type="text" name="period" class="form-control" value="{{$website_opleiding->period}}" placeholder="Enter period" />
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="name">period</label>
                                                        <input type="text" name="place" class="form-control" value="{{$website_opleiding->place}}" placeholder="Enter keywords" />
                                                        </div>
                                                        <!-- <div class="form-group">
                                                        <label for="name">Description</label>
                                                        <textarea  name="description" class="form-control"  value="{{$website_opleiding->description}}"   rows="4" cols="50">{{$website_opleiding->description}}</textarea>
                                                        </div> -->


                                                        <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Edit" />
                                                        </div>
                                                 </form>
                                          </div>
                                   </div>

                                <!--Setting-->
                                <!-- resources/views/sections/setting.blade.php -->
                                @include('pages.admin.Admin_footer')
                                <!--/Setting-->
                        </main>
                    </div>
                </div>
            </div>
@endsection