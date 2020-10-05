<link  href="{{URL::asset('projects/style_Header.css')}}" rel="stylesheet" />
<!--Preloader-->
<div class="preloader-it">
    <div class="mdl-spinner mdl-js-spinner is-active is-upgraded" data-upgraded=",MaterialSpinner"><div class="mdl-spinner__layer mdl-spinner__layer-1"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-2"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-3"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-4"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div></div>
</div>
<!--/Preloader-->


<!--Main Wrapper-->
<div class="main-wrapper">


    <!--Background Image-->
    <div class="bg-struct bg-img"></div>
    <!--/Background Image-->
    
    <div class="mdl-js-layout mdl-layout--fixed-header">
        
        <!--Top Header-->
        <header class="mdl-layout__header" id="navbar">
            <div class="header_width">
                <!-- Hier is the first top header -->
                <div id="HeaderWit">
                    <div id="HeaderWitCenter">

                        <!-- Hier dus de hardcoded sadour.nl-->
                        <div id="titelContainer">
                            <div class="titels">
                                <a id="titel1" href="/">SAD</a>
                                <a id="titel2" href="/">OUR</a>
                                <a id="titel3" href="/">.NL</a>
                                <a id="ondertitel" href="/">with different programming (web) tutorial.</a>
                            </div>
                        </div>

                        <div id="HeaderWitCenterRight">
                            <div id="HeaderWitCenterRightLinks">
                                <a href="">Tip de redactie</a> <a href="">Samenwerken</a> <a href="">Over sadour</a> 
                            </div>
                            <!-- Sociaal follow links -->
                            <div id="HeaderWitCenterRightSocialFollow">
                                <a href="/" target="_blank" class="bg-icon bg-icon_fb"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="/" target="_blank" class="bg-icon bg-icon_fb"><i class="zmdi zmdi-instagram"></i></a>
                                <a href="" target="_blank" class="bg-icon bg-icon_twitter"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="" target="_blank" class="bg-icon bg-icon_instagram"><i class="zmdi zmdi-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End the first top header  -->
                <div class="mdl-layout__header-row mdl-scroll-spy-1">
                    <!-- Title -->
                    <!-- logo imeg of the Site -->
                    <a href="{{ url('/categorys') }}"><span class="mdl-layout-title" style="color: rgb(0 152 212);"><img src="/img/admin/logo_site.png" style="vertical-align:middle" alt="login_img"  width="50" height="50"> SADOUR </span></a>
                    <div class="mdl-layout-spacer"></div>
                    <ul class="nav mdl-navigation mdl-layout--large-screen-only">
                        <!-- Her to get all category name -->
                        <?php $Categorys = App\Models\Category::all()->where('weergeven','1'); ?>
                        @foreach($Categorys as $Category)
                        <li><a class="mdl-navigation__link" href="{{action('Category\CategoryController@getOneCategory', $Category-> id)}}"  name="{{$Category-> id}}">{{ $Category-> name}}</a></li>
                        @endforeach
                        <!-- End get category name -->
                    </ul>

                    <!-- Right aligned menu below button -->
                    <!-- Contact me and Call me -->
                    <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon ver-more-btn">
                    <i class="zmdi zmdi-more-vert"></i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="demo-menu-lower-right">
                        <li class="mdl-menu__item"><a href="mailto:i.m.s.1995@hotmail.com"><i class="zmdi zmdi-email-open font-green pr-10"></i>Contact Me</a></li>
                        <li class="mdl-menu__item"><a href="callto:12345678910"><i class="zmdi zmdi-phone  font-blue  pr-10"></i>+31 685 125 82 2</a></li>
                    </ul>

                    <!-- Right aligned menu below button -->
                    <!-- swithc the language between EN and Nl and AR -->
                    <button id="demo-menu-lower-right_language" class="mdl-button mdl-js-button mdl-button--icon ver-more-btn">
                        <i class="zmdi zmdi-globe"></i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="demo-menu-lower-right_language">

                        <li class="mdl-menu__item"><a href="#">EN</a></li>
                        <li class="mdl-menu__item"><a href="#">NL</a></li>
                        <li class="mdl-menu__item"><a href="#">AR</a></li>
                        
                    </ul>
                    <!-- Right search form button -->
                    <form class="search_form"> 
                        <input  class="search_form_input" type="search" placeholder="Search">
                    </form>
                    <!-- End search form button -->
                                        
                </div>
            </div>  
        </header>
        <!--/Top Header-->
