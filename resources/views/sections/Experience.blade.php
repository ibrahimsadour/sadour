<!--Experience Sec-->
<section id="experience_sec" class="experience-sec sec-pad-top-sm">
    <h2 class="mb-30">@lang('site.experience')</h2>
    <div class="timeline-wrap  overflow-hide mb-30">
        <ul class="timeline">
            @foreach($ervaring_strings as $ervaring)
            @if($ervaring ->id == 1)
            <li>
                <div class="timeline-badge">
                    <i class="zmdi zmdi-case font-blue"></i>
                </div>
                <div class="timeline-panel mdl-card mdl-shadow--2dp pt-30 pb-30 border-top-blue">
                    <div class="timeline-heading">
                        <h4 class="mb-10">{{$ervaring ->company_name}}</h4>
                        <span class="duration mb-5">{{$ervaring ->period}}</span>
                        <span class="institution" style="font-weight: 700 ;color: #ff3d00;"  >{{$ervaring ->place}}</span>
                    </div>
                    <div class="timeline-body">
                        <p class="mt-25">{{$ervaring ->description}}</p>
                    </div>
                </div>
            </li>
            @endif 
            @endforeach 
            
            @foreach($ervaring_strings as $ervaring)
            @if($ervaring ->id == 2)
            <li class="timeline-inverted">
                <div class="timeline-badge">
                    <i class="zmdi zmdi-format-color-text font-green"></i>
                </div>
                <div class="timeline-panel mdl-card mdl-shadow--2dp  pt-30 pb-30 border-top-green">
                    <div class="timeline-heading">
                        <h4 class="mb-10">{{$ervaring ->company_name}}</h4>
                        <span class="duration mb-5">{{$ervaring ->period}}</span>
                        <span class="institution" style="font-weight: 700 ;color: #ff3d00;">{{$ervaring ->place}}</span>
                    </div>
                    <div class="timeline-body">
                        <p class="mt-25">{{$ervaring ->description}}</p>
                    </div>
                </div>
            </li>
            @endif 
            @endforeach

            @foreach($ervaring_strings as $ervaring)
            @if($ervaring ->id == 3)
            <li>
                <div class="timeline-badge">
                    <i class="zmdi zmdi-city-alt font-yellow"></i>
                </div>
                <div class="timeline-panel mdl-card mdl-shadow--2dp pt-30 pb-30 border-top-yellow">
                    <div class="timeline-heading">
                        <h4 class="mb-10">{{$ervaring ->company_name}}</h4>
                        <span class="duration mb-5">{{$ervaring ->period}}</span>
                        <span class="institution" style="font-weight: 700 ;color: #ff3d00;">{{$ervaring ->place}}</span>
                    </div>
                    <div class="timeline-body">
                        <p class="mt-25">{{$ervaring ->description}}</p>
                    </div>
                </div>
            </li>
            @endif 
            @endforeach
            @foreach($ervaring_strings as $ervaring)
            @if($ervaring ->id == 4)
            <li class="timeline-inverted">
                <div class="timeline-badge">
                    <i class="zmdi zmdi-grain -color-text font-blue"></i>
                </div>
                <div class="timeline-panel mdl-card mdl-shadow--2dp  pt-30 pb-30 border-top-blue">
                    <div class="timeline-heading">
                        <h4 class="mb-10">{{$ervaring ->company_name}}</h4>
                        <span class="duration mb-5">{{$ervaring ->period}}</span>
                        <span class="institution" style="font-weight: 700 ;color: #ff3d00;">{{$ervaring ->place}}</span>
                    </div>
                    <div class="timeline-body">
                        <p class="mt-25">{{$ervaring ->description}}</p>
                    </div>
                </div>
            </li>
            @endif 
            @endforeach 

            @foreach($ervaring_strings as $ervaring)
            @if($ervaring ->id ===  5)
            <li>
                <div class="timeline-badge">
                    <i class="zmdi zmdi-city-alt font-green"></i>
                </div>
                <div class="timeline-panel mdl-card mdl-shadow--2dp pt-30 pb-30 border-top-green">
                    <div class="timeline-heading">
                        <h4 class="mb-10">{{$ervaring ->company_name}}</h4>
                        <span class="duration mb-5">{{$ervaring ->period}}</span>
                        <span class="institution" style="font-weight: 700 ;color: #ff3d00;"> {{$ervaring ->place}}</span>
                    </div>
                    <div class="timeline-body">
                        <p class="mt-25">{{$ervaring ->description}}</p>
                    </div>
                </div>
            </li>
            @endif 
            @endforeach 

            @foreach($ervaring_strings as $ervaring)
            @if($ervaring ->id == 6)
            <li class="timeline-inverted">
                <div class="timeline-badge">
                    <i class="zmdi zmdi-grain -color-text font-blue"></i>
                </div>
                <div class="timeline-panel mdl-card mdl-shadow--2dp  pt-30 pb-30 border-top-blue">
                    <div class="timeline-heading">
                        <h4 class="mb-10">{{$ervaring ->company_name}}</h4>
                        <span class="duration mb-5">{{$ervaring ->period}}</span>
                        <span class="institution" style="font-weight: 700 ;color: #ff3d00;">{{$ervaring ->place}}</span>
                    </div>
                    <div class="timeline-body">
                        <p class="mt-25">{{$ervaring ->description}}</p>
                    </div>
                </div>
            </li>
            @endif 
            @endforeach
            <li class="clearfix no-float"></li>
        </ul>
    </div>
</section>
<!--/Experience Sec-->