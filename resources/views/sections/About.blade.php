<!--About Sec-->
<section class="about-sec mt-180 mt-sm-120  mb-30">
    <div class="row">
        <div class="col-lg-12">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="row">
                    <div class="col-md-5 col-xs-12 mb-30">
                        <div class="candidate-img mb-35"></div>
                        <ul class="social-icons">
                            <li>
                                <a class="facebook-link" href="#">
                                    <i id="tt1" class="zmdi zmdi-facebook"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt1">
                                        facebook
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="twitter-link" href="#">
                                    <i id="tt2" class="zmdi zmdi-twitter"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt2">
                                        twitter
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="linkedin-link" href="#">
                                    <i id="tt3" class="zmdi zmdi-linkedin"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt3">
                                        linkedin
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dribbble-link" href="#">
                                    <i id="tt4" class="zmdi zmdi-dribbble"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt4">
                                        dribbble
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="instagram-link" href="#">
                                    <i id="tt5" class="zmdi zmdi-instagram"></i>
                                    <div class="mdl-tooltip" data-mdl-for="tt5">
                                        instagram
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <div class="info-wrap">
                            <h1>@foreach($website_strings as $strings){{$strings ->name}}@endforeach</h1>
                            <h5 class="mt-20 font-grey">{{$strings ->function}}</h5>
                            <div class="mt-30">
                                <a id="download_cv" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  bg-green font-white mr-10" href= "{{route('Download_Cv')}}">download cv <i class="zmdi zmdi-download "></i></a>
                                <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect bg-blue font-white " href="#contact_sec" data-scroll>contact <i class="zmdi zmdi-whatsapp "></i></a>
                            </div>
                        </div>
                        <ul class="profile-wrap mt-50">
                            <li >
                                <div class="profile-title">leeftijd</div>
                                <div class="profile-desc"><?php $curent_year= date("Y"); $year=1995; echo $curent_year - $year; ?></div>
                            </li>
                            <li>
                                <div class="profile-title">adres</div>
                                <div class="profile-desc">
                                    <p> {{$strings ->Address}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="profile-title">email</div>
                                <div class="profile-desc">
                                {{$strings ->Email}}
                                </div>
                            </li>
                            <li>
                                <div class="profile-title">phone</div>
                                <div class="profile-desc">
                                {{$strings ->Phone}}
                                </div>
                            </li>
                            <li>
                                <div class="profile-title">freelance</div>
                                <div class="profile-desc relative">Available
                                    <i id="datepickopn" class="zmdi zmdi-calendar-check font-green pl-5"></i>
                                    <div id='datepicker1' class='datepicker'></div>
                                </div>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</section>
<!--/About Sec-->	