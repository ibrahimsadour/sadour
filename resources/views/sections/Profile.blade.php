<!--Profile Sec-->
<section id="profile_sec" class="profile-sec sec-pad-top-sm">
    <h2 class="mb-30">Wat ik doe</h2>
    <div class="row">
        @foreach($website_watikdoe as $watikdoe)
        @if($watikdoe ->id == 1)
        <div class="col-md-6 col-sm-6 col-xs-12 mb-30">
            <div class="mdl-card mdl-shadow--2dp">
                <i class="zmdi zmdi-format-color-fill font-blue profile-icon"></i>
                <h4 class="mb-15">{{$watikdoe ->titel}}</h4>
                <p>{{$watikdoe ->description}}</p>
            </div>
        </div>
        @endif 
        @endforeach 

        @foreach($website_watikdoe as $watikdoe)
        @if($watikdoe ->id == 2)
        <div class="col-md-6 col-sm-6 col-xs-12 mb-30">
            <div class="mdl-card mdl-shadow--2dp">
                <i class="zmdi zmdi-format-color-text font-green profile-icon"></i>
                <h4 class="mb-15">{{$watikdoe ->titel}}</h4>										
                <p>{{$watikdoe ->description}}</p>
            </div>
        </div>
        @endif 
        @endforeach 

        @foreach($website_watikdoe as $watikdoe)
        @if($watikdoe ->id == 3)
        <div class="col-md-6 col-sm-6 col-xs-12 mb-30">
            <div class="mdl-card mdl-shadow--2dp">
                <i class="zmdi zmdi-comments font-yellow profile-icon"></i>
                <h4 class="mb-15">{{$watikdoe ->titel}}</h4>										
                <p>{{$watikdoe ->description}}</p>
            </div>
        </div>
        @endif 
        @endforeach 


        @foreach($website_watikdoe as $watikdoe)
        @if($watikdoe ->id == 3)
        <div class="col-md-6 col-sm-6 col-xs-12 mb-30">
            <div class="mdl-card mdl-shadow--2dp">
                <i class="zmdi zmdi-grain font-red profile-icon"></i>
                <h4 class="mb-15">{{$watikdoe ->titel}}</h4>										
                <p>{{$watikdoe ->description}}</p>
            </div>
        </div>
        @endif 
        @endforeach 

    </div>
</section>
<!--/Profile Sec-->