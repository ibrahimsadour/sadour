<!--Preloader-->
    <div class="preloader-it">
        <div class="mdl-spinner mdl-js-spinner is-active is-upgraded" data-upgraded=",MaterialSpinner"><div class="mdl-spinner__layer mdl-spinner__layer-1"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-2"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-3"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-4"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div></div>
    </div>
<!--/Preloader-->

<!--Main Wrapper-->
<div class="main-wrapper">


    <!--Bg Image-->
    <div class="bg-struct bg-img"></div>
    <!--/Bg Image-->
    
    <div class="mdl-js-layout mdl-layout--fixed-header">
        
        <!--Top Header-->
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row mdl-scroll-spy-1">
                <!-- Title -->
                <a href="{{ url('/') }}"><span class="mdl-layout-title" style="color: rgb(0 152 212);"><img src="/img/admin/logo_site.png" style="vertical-align:middle" alt="login_img"  width="50" height="50">
                @foreach($website_strings as $strings)
                {{$strings ->name}}
                @endforeach
                </span></a>
                <div class="mdl-layout-spacer"></div>
                <ul class="nav mdl-navigation mdl-layout--large-screen-only">
                    <li><a class="mdl-navigation__link" data-scroll href="#body">over</a></li>
                    <li><a class="mdl-navigation__link" data-scroll href="#skills_sec">vaardigheden</a></li>
                    <!-- <li><a class="mdl-navigation__link" data-scroll href="#portfolio_sec">portefeuille</a></li> -->
                    <li><a class="mdl-navigation__link" data-scroll href="#experience_sec">ervaring</a></li>
                    <li><a class="mdl-navigation__link" data-scroll href="#education_sec">opleiding</a></li>
                    <li><a class="mdl-navigation__link" data-scroll href="#contact_sec">contact</a></li>
                </ul>
                <!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon ver-more-btn">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    data-mdl-for="demo-menu-lower-right">

                    <li class="mdl-menu__item"><a href="{{route('Download_Cv')}}"><i class="zmdi zmdi-download font-red pr-10"></i>Download CV</a></li>
                    <li class="mdl-menu__item"><a href="mailto:i.m.s.1995@hotmail.com"><i class="zmdi zmdi-email-open font-green pr-10"></i>Contact Me</a></li>
                    <li class="mdl-menu__item"><a href="callto:12345678910"><i class="zmdi zmdi-phone  font-blue  pr-10"></i>+31 685 125 82 2</a></li>
                    <li class="mdl-menu__item"><a href="{{url('auth/login')}}"><i class="zmdi zmdi-sign-in  font-blue  pr-10"></i>Inloggen</a></li>
                </ul>

                <!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right_language" class="mdl-button mdl-js-button mdl-button--icon ver-more-btn">
                    <i class="material-icons">language</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    data-mdl-for="demo-menu-lower-right_language">

                    <li class="mdl-menu__item"><a href="#">EN</a></li>
                    <li class="mdl-menu__item"><a href="#">NL</a></li>
                    <li class="mdl-menu__item"><a href="#">AR</a></li>
                    
                </ul>
                
            </div>
        </header>
        <!--/Top Header-->