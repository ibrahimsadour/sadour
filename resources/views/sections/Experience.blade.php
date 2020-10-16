<!--Experience Sec-->
<section id="experience_sec" class="experience-sec sec-pad-top-sm">
    <h2 class="mb-30">@lang('site.experience')</h2>
    <div class="row">
        @foreach($website_experience as $experience)
                <div class="col-md-6 col-sm-6 col-xs-12 mb-30">
                    <div class="mdl-card mdl-shadow--2dp border-top-blue" style="height: 200px;">
                        <h3 class="mb-15">{{$experience ->company_name}}</h3>
                        <p>{{$experience ->period}}</p>
                        <p style="color:#01c853;">{{$experience ->place}}</p>
                        <p>{{$experience ->description}}</p>
                    </div>
                </div>
        @endforeach 
    </div>
</section>
<!--/Experience Sec-->