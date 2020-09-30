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
                                                            <a href="{{route('auth.dashboard.admin')}}" class="btn btn-default pull-right breadcrumb-item "> <i class="	fa fa-angle-double-left"> Terug naar Alle admin informatie   </a></i> 
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control view" disabled value="{{$website_strings->name}}" placeholder="Enter name" />
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="name">Description</label>
                                                        <textarea   class="form-control view"  disabled value="{{$website_strings->description}}"   rows="4" cols="50">{{$website_strings->description}}</textarea>

                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Keywords</label>
                                                        <textarea   class="form-control view" disabled value="{{$website_strings->keywords}}"   rows="4" cols="50">{{$website_strings->keywords}}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Date</label>
                                                        <input type="text"  class="form-control view" disabled value="{{$website_strings->date}}" placeholder="Enter date" />
                                                        </div>


                                                        <div class="form-group">
                                                        <label for="name">Address</label>
                                                        <input type="text"  class="form-control view" disabled value="{{$website_strings->Address}}" placeholder="Enter Address" />
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Email</label>
                                                        <input type="text" name="Email" class="form-control view" disabled value="{{$website_strings->Email}}" placeholder="Enter Email" />
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Phone</label>
                                                        <input type="text"  class="form-control view" disabled value="{{$website_strings->Phone}}" placeholder="Enter Phone" />
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">Function</label>
                                                        <input type="text" class="form-control view" disabled value="{{$website_strings->function}}" placeholder="Enter function" />
                                                        </div>

                                                        <div class="form-group">
                                                        <label for="name">show</label>
                                                        <input type="text" class="form-control view" disabled value="{{$website_strings->view}}" placeholder="Enter function" />
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