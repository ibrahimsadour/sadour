@extends('layouts.AdminDashboard')

<style>
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
    .aanapssen{
    text-align: center;
    font-weight: 700;
}
</style>
@section('Dashboard')
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../index.html">
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
                                <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(/img/abstract-bg-1.jpg); background-size: cover; background-position: center top;">
                                    <!-- Mask -->
                                    <span class="mask bg-gradient-default opacity-8"></span>
                                    <!-- Header container -->
                                    <div class="container-fluid d-flex align-items-center">
                                        <div class="row">
                                        <div class="col-lg-7 col-md-10">
                                            <h1 class="display-2 text-white" style="    color: #262b40 !important;">Hello {{ Auth::user()->name }}</h1>
                                            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
                                            <a href="#!" class="btn btn-neutral">Edit profile</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">


                        </div>
                        <div class="row">
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
                                <p class="aanapssen" >{{ \Session::get('success') }}</p>
                            </div>
                        @endif
                            <div class="col-12 col-xl-8">
                                <div class="card card-body bg-white border-light shadow-sm mb-4">
                                    <h2 class="h5 mb-4">General information</h2>
                                    <?php
                                    $id=auth()->user()->id;
                                    ?>

                                    @foreach($user_profile as $row)
                                    
                                        @if($id == $row['user_id'])
                                        <form  method="POST" action="{{route('auth.dashboard.profile.sendData')}}">
                                            {{csrf_field()}}
                                            @method('put')
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div>
                                                        <label for="first_name">First Name</label>
                                                        <input name="first_name" value="{{$row['first_name']}}"  class="form-control" id="first_name" type="text" placeholder="Enter your first name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div>
                                                        <label for="last_name">Last Name</label>
                                                        <input  name="last_name" value="{{$row['last_name']}}" class="form-control" id="last_name" type="text" placeholder="Also your last name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-6 mb-3">
                                                    <label for="birthday">Birthday</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                                        <input  name="birthday" value="{{$row['birthday']}}"  data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="gender">Gender</label>
                                                    <select  name="gender"  value="{{$row['gender']}}" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                                        <option selected>Gender</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Male">Male</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input name="email"  value="{{$row['email']}}" value="{{$row['email']}}" class="form-control" id="email" type="email" placeholder="name@company.com" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input  name="phone" value="{{$row['phone']}}"  class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="h5 my-4">Adress</h2>
                                            <div class="row">
                                                <div class="col-sm-9 mb-3">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input  name="address"  value="{{$row['address']}}"  class="form-control" id="address" type="text" placeholder="Enter your home address" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mb-3">
                                                    <div class="form-group">
                                                        <label for="number">Number</label>
                                                        <input name="number" value="{{$row['number']}}"  class="form-control" id="number" type="number" placeholder="No." required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 mb-3">
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input name="city" value="{{$row['city']}}"  class="form-control" id="city" type="text" placeholder="City" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="zip">ZIP</label>
                                                        <input name="zip" value="{{$row['zip']}}"  class="form-control" id="zip" type="tel" placeholder="ZIP" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <input type="submit" class="btn btn-primary" value="Save all">
                                            </div>
                                        </form>
                                        @endif

                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="card border-light text-center p-0">
                                            <div class="profile-cover rounded-top" data-background="{{asset('assets/img/profile-cover.jpg') }}"></div>
                                            <div class="card-body pb-5">
                                                <img src="{{auth()->user()->avatarUrl }}" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                                                <h4 class="h3">{{ Auth::user()->name }}</h4>
                                                <h6 class="font-weight-normal">BACK END & FRONT END DEVELOPER</h6>
                                                <p class="text-gray mb-4">{{$row['city']}}, NL</p>
                                                <a class="btn btn-sm btn-primary mr-2" href="callto:{{$row['phone']}}"><span class="fas fa-Phone mr-1"></span> Connect</a>
                                                <a class="btn btn-sm btn-secondary" href="mailto:{{$row['email']}}"><span class="fas fa-envelope mr-1"></span> Send Message</a>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card card-body bg-white border-light shadow-sm mb-4">
                                            <h2 class="h5 mb-4">Select profile photo</h2>
                                            <div class="d-xl-flex align-items-center" style="display:block!important;">

                                                <div class="card h-100" >
                                                    @foreach($avatars as $avatar)
                                                    <div class="card-body" style="height: 50%; width: 50%;">
                                                        <img src="{{$avatar->getUrl()}}" class="card-img-top" alt="avatar ">
                                                        <div class="float-left">
                                                            
                                                            <a href="#" onclick="event.preventDefault();document.getElementById('selectForm{{$avatar->id}}').submit()" ><i class="text-sucess fa fa-check fa-1x"></i></a>
                                                            <form action="{{route('profile.update',auth()->id())}}" style="display:none;" id="selectForm{{$avatar->id}}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <input type="hidden" type="submit" name="selectedAvatar" value="{{$avatar->id}}">

                                                            </form>
                                                            
                                                            <a href="#" onclick="event.preventDefault();document.getElementById('deleteForm{{$avatar->id}}').submit()" ><i class="text-danger fa fa-minus-circle fa-1x"></i></a>
                                                            <form action="{{route('profile.destroy',auth()->id())}}" style="display:none;" id="deleteForm{{$avatar->id}}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <input type="hidden" type="submit" name="deleteAvatar" value="{{$avatar->id}}">

                                                            </form>
                                                        </div>
                                                        <div class="float-right">
                                                        <a href="{{$avatar->getUrl()}}"   target="_blank" ><i class="text-info fa fa-eye fa-1x"></i></a>
                                                        <a href="{{$avatar->getUrl()}}" download ><i class="text-warning fa fa-cloud-download-alt fa-1x"></i></a>

                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>

                                            </div>

                                                <!-- <div class="col mb-4">
                                                   
                                                </div> -->

                                                <div class="file-field">
                                                    <div class="d-flex justify-content-xl-center ml-xl-3">
                                                    @if(session()->has('error'))
                                                        <div class="alert alert-danger">{{session()->get('error')}}</div>
                                                    
                                                    @endif
                                                    <form action="{{route('auth.dashboard.profile.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('post')
                                                       <div class="d-flex" style="">
                                                                <span class="icon icon-md"><span class="fas fa-paperclip mr-3"></span></span>
                                                                <input type="file"  name="avatar" >
                                                                    <div class="d-md-block text-left">
                                                                        <div class="font-weight-normal text-dark mb-1">Choose Image</div>
                                                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                                                    </div>
                                                        </div>
                                                        <input type="submit"  value="Upload" class="btn btn-primary hoiibo" style=" " >

                                                       </form>
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
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

@endsection