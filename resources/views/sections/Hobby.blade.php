<!--Hobby's Sec-->
<section id="interest_sec" class="interest-sec sec-pad-top-sm">
    <h2 class="mb-30">Hobby's</h2>
    <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
            <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                <i class="zmdi zmdi-radio"></i>
                <span>
                    @foreach($website_hobbys as $hobbys)
                        @if($hobbys ->id == 1)
                        {{$hobbys ->name}}
                        @endif 
                    @endforeach 
                </span>
            </div>
        </div>	
        <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
            <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                <i class="zmdi zmdi-smartphone-ring"></i>
                <span>
                @foreach($website_hobbys as $hobbys)
                    @if($hobbys ->id == 2)
                    {{$hobbys ->name}}
                    @endif 
                @endforeach 
                </span>
            </div>
        </div>	
        <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
            <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                <i class="zmdi zmdi-camera"></i>
                <span>
                @foreach($website_hobbys as $hobbys)
                    @if($hobbys ->id == 3)
                    {{$hobbys ->name}}
                    @endif 
                @endforeach 
                </span>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
            <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                <i class="zmdi zmdi-library"></i>
                <span>
                
                @foreach($website_hobbys as $hobbys)
                    @if($hobbys ->id == 4)
                    {{$hobbys ->name}}
                    @endif 
                @endforeach 
                </span>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
            <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                <i class="zmdi zmdi-airplane"></i>
                <span>
                @foreach($website_hobbys as $hobbys)
                    @if($hobbys ->id == 5)
                    {{$hobbys ->name}}
                    @endif 
                @endforeach 
                </span>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
            <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                <i class="zmdi zmdi-dribbble"></i>
                <span>
                @foreach($website_hobbys as $hobbys)
                    @if($hobbys ->id == 6   )
                    {{$hobbys ->name}}
                    @endif 
                @endforeach 
                 </span>
            </div>
        </div>
    </div>
</section>
<!--/Hobby's Sec-->