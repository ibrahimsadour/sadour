@extends('layouts.AdminDashboard')
<style>
.form-control {
    margin-bottom: .5rem;
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
                                        <br/>
                                        <h3 aling="center">Edit Project <span style="color:rgb(0 152 212); font-weight: 700;">{{$Projects->name}}</span></h3>
                                        <br/>

                                        <form  method="POST" enctype="multipart/form-data" action="{{route('ajax.project.update')}}"  id="projectsFormUpdate">
                                            @csrf
                                            {{ method_field('POST') }}
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-success d-none" id="msg_div">
                                                        <span id="res_message"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="text"  name="project_id"  value="{{$Projects->id}}" style="display:none;">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kieiz een foto</label>
                                                <input type="file" class="form-control" name="photo" class="@error('photo') is-invalid @enderror">

                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$Projects->name}}" >

                                            </div>


                                            <div class="form-group">
                                                <label for="Name">Description :</label>
                                                <textarea id="ckeditor" name="description" value="{!! $Projects->description !!}">{!! $Projects->description !!}</textarea>
                                                <small id="description_error" class="form-text text-danger"></small>
                                                <script> CKEDITOR.replace('ckeditor' );</script>        
                                            </div>

                                            

                                            <button id="projects_update" class="btn btn-primary">Edit</button>
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
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<!-- Text editor (ckeditor)  -->
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<!-- End text editor -->
<script
    src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous"></script>

<script type="text/javascript">


  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //get provider branches
    $(document).on('click', '#projects_update', function (e) {
        e.preventDefault();
        // deze stukje voor de (text editor)
        for (instance in CKEDITOR.instances) {
       CKEDITOR.instances[instance].updateElement();
        }
        var formData = new FormData($('#projectsFormUpdate')[0]);
        $.ajax({
            type: 'post',
            enctype:"multipart/form-data",
            url: "{{route('ajax.project.update')}}",
            data: formData,
            processData : false,
            contentType:false,
            cache:false,
            success: function (data) {
                if(data.status == true)
                    swal("Done!", data.msg, "success");
                   
            },
            error: function (data){
                if(data.status == false)
                    // alert(data.  msg)
  
                    swal("Error!", data.msg, "error");
            }
        });
    });

</script>
