
<!DOCTYPE html>
<html lang="en" class="no-js">
	
<!-- Mirrored from hencework.com/theme/matresume/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 16:34:58 GMT -->
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title></title>
		<meta name="title" content="Ibrahim Sadour ">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content=""/>
		<link rel="canonical" href="https://sadour.nl/">

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="Ibrahim Sadour">
		<meta property="og:url" content="https://sadour.nl/">
		<meta property="og:title" content="Ibrahim Sadour ">
		<meta property="og:description" content="Ibrahim Sadour, I am responsible for designing, coding and customizing websites, from layout to function and according to customer specifications. Strive to create visually appealing sites with a user-friendly design and clear navigation.">
		<meta property="og:image" content="/img/admin/logo_site.png">

		<!-- Twitter -->
		<meta property="twitter:card" content="Ibrahim Sadour">
		<meta property="twitter:url" content="https://sadour.nl/">
		<meta property="twitter:title" content="Ibrahim Sadour ">
		<meta property="twitter:description" content="Ibrahim Sadour, I am responsible for designing, coding and customizing websites, from layout to function and according to customer specifications. Strive to create visually appealing sites with a user-friendly design and clear navigation.">
		<meta property="twitter:image" content="/img/admin/logo_site.png">
		
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!--CSS-->
        <!--- {{URL::asset('********')}}   dit is een helper functie in PHP -->
        <link  href="{{URL::asset('css/style.css')}}" rel="stylesheet" />
        
</head>
<!--Portfolio Sec-->
<style>
.portfolio-sec .bottom-links {
    display: block;
    padding: 12px 15px;
    text-align: right;
    font-size: 22px;
}
.portfolio-sec .light-img-wrap .img-cap {
    position: absolute;
    text-transform: capitalize;
    font-size: 18px;
    font-weight: 500;
    color: #333;
    display: inline-block;
    left: 20px;
    bottom: 20px;
    z-index: 2;
}
.portfolio-sec .bottom-links a:first-child {
    padding-right: 15px;
}
img{
    height: 275px!important;
    max-height: 300px;
    width: 100%!important;
}
.mdl-card__title {

    height: 340px;
}
.portfolio-sec .light-img-wrap .img-cap {
    position: relative;
    text-transform: capitalize;
    font-size: 18px;
    font-weight: 500;
    color: #333;
    display: inline-block;
    left: 20px;
    bottom: 0px;
    z-index: 2;
    padding-top: 10px;
}
.text-muted{
    float: left;
    font-size: 14px;
}
.page-header{
    padding: 40px;
    background-color: #fff;
    margin-bottom: 40px;
}
h1:first-child{
    margin-bottom: .25rem;
    font-family: source sans pro,Helvetica Neue,Helvetica,Arial,sans-serif;
    font-weight: 700;
    line-height: 1.2;
    margin: 0 0 1.75rem;
    font-size: 3rem;
}
.taxonomy-description{
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.75;
    font-family: noto sans,Helvetica Neue,Helvetica,Arial,sans-serif;
    word-wrap: break-word;
    color: #333;
}
.subTitle1{
    position: relative;
    left: 20px;
    color: #0098d4;
}
.subTitle2{
    position: relative;
    left: 20px;
    color: #0098d4;
}
.hr_{
    border-right: 1px solid #e6e6e6;
    margin-right: 10px;
    padding-right: 10px;

}
.text-muted{
    position: relative;
    left: 5px;
}
.project_title{
    color: #495057;
    font-weight: 500;
    font-size: 24px;
}
.subTitle{
    width: auto;
}
.project_title:hover {
      background: none;
      color: #0098d4; 
}
.project_title:active {
    background: none;
    opacity: 1; 
}
.lave_comment{
    color: #0098d4;
}
.lave_comment:hover {
      background: none;
      color: #495057; 
}
b{
    font-weight: bold;
}
.btn-sm {
    padding: 2.5px 5px;
    position: relative;
    bottom: 2px;
    right: 3px;
}
</style>
<body id="body" data-ng-app="contactApp">
        
    <!--Main Content-->
   
    <div class="container">



        <header class="page-header" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
            <h1 class="page-title" itemprop="headline">Category: <span>Laravel</span></h1>
            <div class="taxonomy-description" itemprop="description">
                <p>
                    A PHP Laravel Framework is a basic platform that allows us to develop <b> web applications</b>. In other words, it provides structure. By using a PHP Laravel Framework, you will end up saving loads of time, stopping the need to produce repetitive code, and you’ll be able to build&nbsp;<b>applications</b>&nbsp;rapidly (RAD).Laravel Tutorial – Learn Laravel in simple way starting from basic to advanced concepts with examples. Laravel Tutorial For Beingners, In this Laravel Tutorial Learn Laravel Step By Step&nbsp;Guide to Building Your Laravel&nbsp; Applications. Also Learn Laravel Topics Like Laravel Installation, Laravel Passport, Laravel Email Verification, Laravel Pagination, Laravel Rest full apis, Laravel Crud. A complete step by step guide.&nbsp;widows&nbsp;and&nbsp;ubuntu&nbsp;both&nbsp;system&nbsp;are&nbsp;installation&nbsp;process&nbsp;here.
                </p>
            </div> 
        </header>
        <section id="portfolio_sec" class="portfolio-sec sec-pad-top-sm">
            <h2 class="mb-30">projecten</h2>
            <div class="gallery-wrap mb-30">
                <div class="portfolio-wrap project-gallery">
                    <ul id="portfolio" class="portf auto-construct  project-gallery" data-col="2">
                        @foreach($Projects as $Project)
                            <li  class="item mdl-card mdl-shadow--2dp pa-0 branding">
                                <div class="light-img-wrap mdl-card__title pa-0">
                                    <img class="img-responsive" src="{{asset('images/Projects/'.$Project->photo)}}"  alt="Image description" />
                                    <span class="img-cap"><a href="" class="project_title"> {{$Project -> name}} </a></span>
                                </div>
                                <div class="subTitle"> 	
                                    <div class="subTitle1" >{{$Project -> created_at}}<span class="hr_"></span> 
                                    <span ><a href="" class="lave_comment">By Admin</a><span class="hr_"></span></span>
                                    <span><a href="" class="lave_comment">Leave a Comment</a></span>
                                    </div>
                                </div>          
                                <span class="bottom-links mdl-card__actions">
                                <span class="text-muted"><strong>3,757</strong> Viewer</span>

                                    <button type="button" class="btn btn-success btn-sm float-right hidden-xl-down"  > 
                                        FREE
                                    </button>
                                    <a  href="{{route('git.one.project',$Project->id)}}"><i class="zmdi zmdi-eye"></i></a>
                                </span>

                            </li>
                        @endforeach
                    </ul>
                    <!-- Hidden video div -->
                    <div style="display:none;" id="video1">
                        <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                            <source src="video/video1.mp4" type="video/webm">
                            <source src="video/video1.html" type="video/webm">
                                Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </section>
                   

 
            
        <!--Footer Sec-->
        <footer class="footer-sec sec-pad-top-sm sec-pad-bottom text-center">
            <h4>Bedankt voor het bezoeken.</h4>
            <p class="mt-10">Copyright ©  {{ now()->year }} All rights reserved by web design </p>

        </footer>
        <span class="posted-on">
            <a href="https://www.tutsmake.com/laravel-8-rest-api-crud-with-passport-auth-tutorial/" rel="bookmark">
            <time datetime="2020-09-28T05:18:47+00:00" class="modified-entry-date" itemprop="dateModified">
            September 28, 2020 </time>
            <time datetime="2020-09-28T05:18:45+00:00" class="entry-date" itemprop="datePublished">
            September 28, 2020 </time>
            </a>
        </span>
        <!--Footer Sec-->
	
	</div>	
		
	
		<!-- Scripts -->
		<script src="{{URL::asset('js/jquery-1.12.4.min.js')}}"></script>
		<script src="{{URL::asset('js/angular.min.js')}}"></script>
		<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
		<script src="{{URL::asset('js/jquery-ui.min.js')}}"></script>
		<script src="{{URL::asset('js/material.min.js')}}"></script>
		<script src="{{URL::asset('js/jQuery.appear.js')}}"></script>
		<script src="{{URL::asset('js/app.js')}}"></script>
		<script src="{{URL::asset('js/controllers.js')}}"></script>
		<script src="{{URL::asset('js/smooth-scroll.js')}}"></script>
		<script src="{{URL::asset('js/isotope.js')}}"></script>
		<script src="{{URL::asset('js/lightgallery-all.js')}}"></script>
		<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{URL::asset('js/froogaloop2.min.js')}}"></script>
		<script src="{{URL::asset('js/jquery.slimscroll.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxXt2P7-U38bK0xEFIT-ebZJ1ngK8wjww"></script>
		<script src="{{URL::asset('js/init.js')}}"></script>
	</body>

<!-- Mirrored from hencework.com/theme/matresume/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 16:35:11 GMT -->
</html>
