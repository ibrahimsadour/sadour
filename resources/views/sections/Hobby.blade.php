<!--Hobby's Sec-->
<section id="interest_sec" class="interest-sec sec-pad-top-sm">
    <h2 class="mb-30">@lang('site.Hobbies')</h2>
    <div class="row">
        @foreach($website_hobbys as $hobbys)
            <div class="col-md-2 col-sm-4 col-xs-6 mb-30">
                <div class="mdl-card mdl-shadow--2dp text-center pa-20 pt-30 pb-30">
                    <i class="zmdi zmdi-radio"></i>
                    <span>{{$hobbys ->name}}</span>
                </div>
            </div>
        @endforeach 	
    </div>
</section>
<!--/Hobby's Sec-->