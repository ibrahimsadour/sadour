<style>

    .card-stats{
        width: 280px;
        height: 225px;
    }

</style>
<!-- Dashboard -->
<div class="header bg-primary pb-6" style="border-radius: 0.5rem;" >
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                    </ol>
                </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                <a href="{{URL('/auth/dashboard/calendar/allevent')}}" class="btn btn-sm btn-neutral">All Event <span class="fas fa-calendar-alt"> </span> </a>
                <a href="{{URL('/auth/dashboard/calendar')}}" class="btn btn-sm btn-neutral">Calendar <span class="fas fa-calendar-plus"></span></a>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <!-- Card stats  ( 1 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/admin')}}">    Admin information  </h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <i class="fas fa-user"></i>
                                    </div>

                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\User::all()->count() }}</span>
                                <span class="text-nowrap">Number of user in the sites</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card stats  ( 2 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/ervaring')}}">    Experience  </h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="far fa-file-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\Models\Ervaring::all()->count() }}</span>
                                <span class="text-nowrap">Number of Experience</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card stats  ( 3 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/opleiding')}}">    Education  </h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i  class="fas fa-graduation-cap"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>{{ \App\Models\Opleiding::all()->count() }}</span>
                                <span class="text-nowrap"> Number of Training</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card stats  ( 4 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/watikdoe')}}"> What I do</h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fa fa-american-sign-language-interpreting"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>  {{ \App\Models\Services::all()->count() }} </span>
                                <span class="text-nowrap">Number of services</span>
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Card stats  ( 5 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/hobbys')}}"> Hobbies</h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <i  class="fa fa-cubes"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\Models\Hobbys::all()->count() }}</span>
                                <span class="text-nowrap">Number of hobbies</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card stats  ( 6 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/contact')}}">Contact</h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\Models\Contact::all()->count() }}</span>
                                <span class="text-nowrap">Number of messages </span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card stats  ( 7 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/setting')}}"> User Management</h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2">Customize Roles / New User</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card stats  ( 8 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/profile')}}">My Profile</h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2">Here you can modify your profile</span>

                            </p>
                        </div>
                    </div>
                </div>

                <hr>
                
                <!-- Card stats  ( 9 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/projects')}}"> Projects</h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <i  class="fab fa-r-project"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>{{ \App\Models\Projects::all()->count() }}</span>
                                <span class="text-nowrap">Number of projects</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card stats  ( 10 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/sociaal_contact')}}"> Social contact</h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="fa fa-globe "></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ \App\Models\Sociaal_Contact::all()->count() }}</span>
                                <span class="text-nowrap">Number of platform </span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card stats  ( 11 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/calendar')}}">Calendar</h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2">add new event</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card stats  ( 12 ) -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"><a class="nav-link" href="{{url('/auth/dashboard/profile')}}"> </h5></a>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2">Comming soon</span>

                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<br>