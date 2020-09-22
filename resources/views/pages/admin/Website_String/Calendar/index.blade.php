@extends('layouts.AdminDashboard')



<!-- Deze bootstrap en css code is gemaakt voor Calendar -->
<!-- ################################################### -->
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   
<!-- Jquey Ui Css  -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<!-- Fullcalendar CSS -->
<link   type="text/css" href="{{asset('css/fullcalendar.css')}}" rel="stylesheet" >
<!-- #################################################### -->
<!-- End Calendar -->


<!-- alle script hier is gemaakt voor de calendar -->
<!-- ############################################### -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous" type="text/javascript" ></script>



<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous" type="text/javascript" ></script>

<!-- moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js" type="text/javascript" ></script>

<!-- Bootstrap  Js bundle -->

<!-- Fullcalendar JS -->
<script src="{{asset('js/fullcalendar.js')}}" ></script>
<script src="{{asset('js/jquery.min.js')}}" ></script>

<!-- ############################################# -->
<!-- End Calendar -->
<style>


    .alert-success{
        color: black!important;

    }
    .alert-danger{
        color: black!important;

    }
    
    .alert {
    padding: 0rem 1rem!important;
    }
    .form-group{
        margin-top: 10px!important;
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
                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                                    <div class="d-block mb-4 mb-md-0">
                                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                                            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                                            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="btn-toolbar mb-2 mb-md-0">
                                        @role('Admin')
                                        <div class="btn-group">
                                        <button  class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" id="addevent">
                                                <span class="icon icon-sm icon-gray" >
                                                    <span class="fas fa-calendar-plus" style="font-size: 2.5rem;" ></span>
                                                </span>
                                        </button>
                                        </div>
                                        @endrole
                                    </div>
                                </div>
                                
                                <div class="table-settings mb-4">
                                    <div class="row align-items-center justify-content-between">

                                    <!-- hier wordt de Search form geinclude -->
                                    <!-- resources/views/pages/admin/Websit_String.blade.php -->
                                    @include('pages.admin.Website_String.includes.search_form')
                                    <!-- End Search Form -->
                                    @role('Admin')
                                        <div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
                                            <div class="btn-group">
                                                <form action="{{route('calendar.show')}}">
                                                    <button type="submit" class="btn btn-sm btn-outline-primary"> All Event  <span class="fas fa-calendar-alt"></span></button>
                                                </form>
                                            </div>
                                        </div>
                                    @endrole
                                    
                                        
                                    </div>
                                </div>

                                <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
                                    @if($message = Session::get('success'))
                                    <div class="alert alert-success">
                                    <p>{{$message}}</p>
                                    </div>
                                    @endif

                                    <div style="margin-top: 2%;" id="calendar"></div>


                                </div>

                                <!--Setting-->
                                <!-- resources/views/sections/setting.blade.php -->
                                @include('pages.admin.Website_String.Calendar.addEvent')
                                <!--/Setting-->

                                <!--Setting-->
                                <!-- resources/views/sections/setting.blade.php -->
                                @include('pages.admin.Website_String.includes.Admin_footer')
                                <!--/Setting-->
                        </main>
                    </div>
                </div>
            </div>

@endsection

<script>

// Code goes here
jQuery(document).ready(function($) {


function convert(str){
  const d = new Date(str);
  let month = '' + (d.getMonth() + 1);
  let day = '' +d.getDate();
  let year = '' +d.getFullYear();

  if(month.length < 2 ) month = '0' + month;
  if(day.length < 2 ) day = '0' + day;

  let hour ='' +d.getUTCHours();
  let minutes ='' +d.getUTCMinutes();
  let seconds ='' +d.getUTCSeconds();

  if(hour.length < 2 ) hour = '0' + hour;
  if(minutes.length < 2 ) minutes = '0' + minutes;
  if(seconds.length < 2 ) seconds = '0' + seconds;
  return [year,month,day].join('-')+' '+[hour,minutes,seconds].join(':');

};

$('#addevent').on('click',function(){

    $('#dialog2').dialog({

        title:'Add Event',
        widht:600,
        height:700,
        modal:true,
        show:{effect:'clip', duration:350},
        hide:{effect:'clip', duration:250}

    })
})
// page is now ready, initialize the calendar...

var calendar = $('#calendar').fullCalendar({
  // put your options and callbacks here
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'year,month,agendaWeek,agendaDay,listWeek'

  },
  timezone: 'local',
  height: "auto",
  selectable: true,
  showNonCurrentDates:true,
  editable:true,
  dragabble: true,
  defaultView: 'month',
  yearColumns: 4,

  durationEditable: true,
  bootstrap: false,

  events:"{{route('allEvent')}}",
  @role('Admin')
    dayClick:function(date,event,view){

        $('#start').val(convert(date));
        $('#dialog').dialog({
            title:'Add Event',
            widht:600,
            height:700,
            modal:true,
            show:{effect:'clip', duration:350},
            hide:{effect:'clip', duration:250}

        })

    },
    select:function(start,end){
        $('#start').val(convert(start));
        $('#end').val(convert(end));
        $('#dialog').dialog({
            title:'Add Event',
            widht:600,
            height:650,
            modal:true,
            show:{effect:'clip', duration:350},
            hide:{effect:'clip', duration:250}

        })

    },
    eventClick:function (event) {
        $('#title').val(event.title);
        $('#start').val(convert(event.start));
        $('#end').val(convert(event.end));
        $('#textColor').val(event.textColor);
        $('#eventId').val(event.id);
        $('#update').html('Update Event');
        $('#dialog').dialog({
            title:'Edit Event',
            widht:600,
            height:650,
            modal:true,
            show:{effect:'clip', duration:350},
            hide:{effect:'clip', duration:250}

        })
    }
    @endrole

})
});

</script>
    