<!--Profile Sec-->
<section id="services_sec" class="profile-sec sec-pad-top-sm">
    <h2 class="mb-30">@lang('site.services')</h2>
    <div class="row">
        @foreach($website_services as $service)
                <div class="col-md-6 col-sm-6 col-xs-12 mb-30">
                    <div class="mdl-card mdl-shadow--2dp border-top-blue" style="height: 200px;">
                        <h3 class="mb-15">{{$service ->titel}}</h3>
                        <p>{{$service ->description}}</p>
                    </div>
                </div>
        @endforeach 
    </div>
</section>
<!--/Profile Sec-->