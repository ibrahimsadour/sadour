
<!--Left Sidebar-->
<div class="mdl-layout__drawer">
    <div class="nicescroll-bar">
        <div class="drawer-profile-wrap">
            <div class="candidate-img-drawer mt-25 mb-20"></div>
            <span class="candidate-name block mb-10 text-center">@foreach($website_strings as $strings){{$strings ->name}}@endforeach</span>
            <ul class="social-icons  mb-30">
                <li>
                    <a class="facebook-link" href="https://www.facebook.com/sadour95">
                        <i id="tt11" class="zmdi zmdi-facebook"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt11">
                            facebook
                        </div>
                    </a>
                </li>
                <li>
                    <a class="twitter-link" href="#">
                        <i id="tt12" class="zmdi zmdi-twitter"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt12">
                            twitter
                        </div>
                    </a>
                </li>
                <li>
                    <a class="linkedin-link" href="#">
                        <i id="tt13" class="zmdi zmdi-linkedin"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt13">
                            linkedin
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dribbble-link" href="#">
                        <i id="tt14" class="zmdi zmdi-dribbble"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt14">
                            dribbble
                        </div>
                    </a>
                </li>
                <li>
                    <a class="instagram-link" href="#">
                        <i id="tt15" class="zmdi zmdi-instagram"></i>
                        <div class="mdl-tooltip" data-mdl-for="tt15">
                            instagram
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="mdl-scroll-spy-2">
            <ul class="mdl-navigation">
                <li>
                    <a class="mdl-navigation__link border-top-sep" data-scroll href="#body">
                        <i class="zmdi zmdi-border-color pr-15"></i>
                        <span class="font-capitalize">over</span>
                    </a>
                </li>	
                <li>
                    <a class="mdl-navigation__link border-top-sep" data-scroll href="#skills_sec">
                        <i class="zmdi zmdi-cutlery pr-15"></i>
                        <span class="font-capitalize">vaardigheden</span>
                    </a>
                </li>
                <li>
                    <a class="mdl-navigation__link border-top-sep" data-scroll href="#experience_sec">
                        <i class="zmdi zmdi-shield-check pr-15"></i>
                        <span class="font-capitalize">ervaring</span>
                    </a>
                </li>	
                <li>
                    <a class="mdl-navigation__link border-top-sep" data-scroll href="#education_sec">
                        <i class="zmdi zmdi-library pr-15"></i>
                        <span class="font-capitalize">opleiding</span>
                    </a>
                </li>	
                
                <li>
                    <a class="mdl-navigation__link border-top-sep border-bottom-sep" 	data-scroll  href="#contact_sec">
                        <i class="zmdi zmdi-email pr-15"></i>
                        <span class="font-capitalize">contact</span>
                    </a>
                </li>	
            </ul>
        </div>
        <div class="drawer-footer mt-50 mb-30 text-center">
            <p class="font-12 mt-10"> @foreach($website_strings as $strings){{$strings ->name}}@endforeach &copy;  {{ now()->year }}.</p>
        </div>
    </div>
</div>       
<!--/Left Sidebar-->
