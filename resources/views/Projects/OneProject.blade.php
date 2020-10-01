
<!DOCTYPE html>
<html lang="en" class="no-js">
	
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
.project_img{
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
    margin: 0px 0 0.75rem;
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
.author-info{
    padding: 40px;
    background-color: #fff;
    margin-bottom: 40px;
}
.avatar {
    float: left;
    margin-right: 1.75rem;
    margin-bottom: 0;
    display: block;
}
.author-link{
    color: #e59900!important;
    text-decoration: none;
    transition: all .1s ease-in-out;
    margin-top:10px;
}
.author-title{
    text-align: left;
    font-family: source sans pro,Helvetica Neue,Helvetica,Arial,sans-serif;
    font-weight: 700;
    line-height: 1.2;
    margin: 0 0 0.75rem;
}
.author-bio{
    display: grid;
}
</style>
<body id="body" data-ng-app="contactApp">
        
    <!--Main Content-->
   
    <div class="container">



        <header class="page-header" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
            <img  class="project_img"src="{{asset('images/Projects/'.$Projects->photo)}}">

            <div class="taxonomy-description" itemprop="description">
                <h1 class="page-title" itemprop="headline">{{$Projects->name}}</h1>
                <div class="subTitle"> 	
                    <div class="subTitle1" >{{$Projects-> created_at}}<span class="hr_"></span> 
                    <span ><a href="" class="lave_comment">By Admin</a><span class="hr_"></span></span>
                    <span><a href="" class="lave_comment">Leave a Comment</a></span>
                    </div>
                </div></br> 

                <artical >{!! $Projects->description !!}</artical>
            </div> 
            
        </header>

        <header class="page-header" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
            <div class="author-info">
                <img alt="" src="https://secure.gravatar.com/avatar/646742c2bc0bba213cdca19a447a8cc3?s=120&amp;r=g" data-lazy-type="image" data-src="https://secure.gravatar.com/avatar/646742c2bc0bba213cdca19a447a8cc3?s=120&amp;r=g" srcset="https://secure.gravatar.com/avatar/646742c2bc0bba213cdca19a447a8cc3?s=240&amp;r=g 2x" data-srcset="" class="avatar avatar-120 photo lazy-loaded" height="120" width="120" loading="lazy">
                <div class="author-description">
                <h2 class="author-title">Admin</h2>
                    <div class="author-bio" >
                        <p >
                        My name is Ibrahim sadour. I am a full-stack developer, entrepreneur, and owner of Sadour.nl. I like writing tutorials and tips that can help other developers. I share tutorials of PHP, Javascript, JQuery, Laravel, Livewire, Codeigniter, Vue JS, Angular JS, React Js, WordPress, and Bootstrap from a starting stage. As well as demo example. </p>
                        <p  class="author-link" ><a class="author-link" href="" rel="author">
                        View all posts by Admin </a></p>
                        <p></p>
                    </div>    
                </div>
            </div>
        </header>

        <header class="page-header" itemscope="itemscope" itemtype="">
            <H1> LEAVE COMMENT </H1>
        </header>
       

 
            
        <!--Footer Sec-->
        <footer class="footer-sec sec-pad-top-sm sec-pad-bottom text-center">
            <h4>Bedankt voor het bezoeken.</h4>
            <p class="mt-10">Copyright ©  {{ now()->year }} All rights reserved by web design </p>

        </footer>

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

</html>
