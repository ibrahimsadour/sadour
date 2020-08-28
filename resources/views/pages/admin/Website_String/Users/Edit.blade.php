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

                                                 <form method="post" action="{{action('Admin\AdminAddUsersController@update',['admin' => $website_strings->id])}}">
                                                        {{csrf_field()}}
                                                        {{ method_field('PATCH') }}
                                                        <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" class="form-control" value="{{$website_strings->name}}" placeholder="Enter name" />
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="name">Description</label>
                                                        <textarea  name="description" class="form-control"  value="{{$website_strings->description}}"   rows="4" cols="50">{{$website_strings->description}}</textarea>

                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Keywords</label>
                                                        <textarea  name="keywords" class="form-control"  value="{{$website_strings->keywords}}"   rows="4" cols="50">{{$website_strings->keywords}}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Date</label>
                                                        <input type="text" name="date" class="form-control" value="{{$website_strings->date}}" placeholder="Enter date" />
                                                        </div>


                                                        <div class="form-group">
                                                        <label for="name">Address</label>
                                                        <input type="text" name="Address" class="form-control" value="{{$website_strings->Address}}" placeholder="Enter Address" />
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Email</label>
                                                        <input type="text" name="Email" class="form-control" value="{{$website_strings->Email}}" placeholder="Enter Email" />
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Phone</label>
                                                        <input type="text" name="Phone" class="form-control" value="{{$website_strings->Phone}}" placeholder="Enter Phone" />
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Function</label>
                                                        <input type="text" name="function" class="form-control" value="{{$website_strings->function}}" placeholder="Enter function" />
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">show</label>
                                                        <input type="text" name="function" class="form-control" value="{{$website_strings->view}}" placeholder="Enter function" />
                                                        </div>
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