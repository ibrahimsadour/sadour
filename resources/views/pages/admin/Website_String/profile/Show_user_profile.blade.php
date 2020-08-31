@extends('layouts.AdminDashboard')

@section('Dashboard')
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../index.html">
        <img class="navbar-brand-dark" src="../assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="../assets/img/brand/dark.svg" alt="Volt logo" />
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

                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">


                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-8">
                                <div class="card card-body bg-white border-light shadow-sm mb-4">
                                    <h2 class="h5 mb-4">General information</h2>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div>
                                                    <label for="first_name">First Name</label>
                                                    <input class="form-control" id="first_name" type="text" placeholder="Enter your first name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div>
                                                    <label for="last_name">Last Name</label>
                                                    <input class="form-control" id="last_name" type="text" placeholder="Also your last name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-6 mb-3">
                                                <label for="birthday">Birthday</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                                    <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                                                 </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="gender">Gender</label>
                                                <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                                                    <option selected>Gender</option>
                                                    <option value="1">Female</option>
                                                    <option value="2">Male</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input class="form-control" id="email" type="email" placeholder="name@company.com" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="h5 my-4">Adress</h2>
                                        <div class="row">
                                            <div class="col-sm-9 mb-3">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input class="form-control" id="address" type="text" placeholder="Enter your home address" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <div class="form-group">
                                                    <label for="number">Number</label>
                                                    <input class="form-control" id="number" type="number" placeholder="No." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input class="form-control" id="city" type="text" placeholder="City" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="zip">ZIP</label>
                                                    <input class="form-control" id="zip" type="tel" placeholder="ZIP" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Save All</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="card border-light text-center p-0">
                                            <div class="profile-cover rounded-top" data-background="../assets/img/profile-cover.jpg"></div>
                                            <div class="card-body pb-5">
                                                <img src="../assets/img/team/profile-picture-1.jpg" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                                                <h4 class="h3">Neil Sims</h4>
                                                <h5 class="font-weight-normal">Senior Software Engineer</h5>
                                                <p class="text-gray mb-4">New York, USA</p>
                                                <a class="btn btn-sm btn-primary mr-2" href="#"><span class="fas fa-user-plus mr-1"></span> Connect</a>
                                                <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card card-body bg-white border-light shadow-sm mb-4">
                                            <h2 class="h5 mb-4">Select profile photo</h2>
                                            <div class="d-xl-flex align-items-center">
                                                <div>
                                                    <!-- Avatar -->
                                                    <div class="user-avatar xl-avatar mb-3">
                                                        <img class="rounded" src="../assets/img/team/profile-picture-3.jpg" alt="change avatar">
                                                    </div>
                                                </div>
                                                <div class="file-field">
                                                    <div class="d-flex justify-content-xl-center ml-xl-3">
                                                       <div class="d-flex">
                                                          <span class="icon icon-md"><span class="fas fa-paperclip mr-3"></span></span> <input type="file">
                                                          <div class="d-md-block text-left">
                                                             <div class="font-weight-normal text-dark mb-1">Choose Image</div>
                                                             <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>                                        
                                            </div>
                                        </div>
                                    </div>
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