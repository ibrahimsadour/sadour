<!-- resources/views/Projects/layouts/masterCategories.blade -->
@extends('Projects.layouts.masterCategories')
<!-- master -->  

<!--css code-->
<link  href="{{URL::asset('projects/style_One_Project.css')}}" rel="stylesheet" />
<!-- end ccs code -->
@section('OneProject')
<!--Category discrption Sec-->

<section class="about-sec mt-180 mt-sm-120  mb-30">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <header class="page-header" itemscope="itemscope" itemtype="">
                    <h1 class="page-title" itemprop="headline">Category: <span>All Tutorial </span></h1>
                    <div class="taxonomy-description" itemprop="description">
                        <p style="font-size:17px">
                            A PHP Laravel Framework is a basic platform that allows us to develop <b> web applications</b>. In other words, it provides structure. By using a PHP Laravel Framework, you will end up saving loads of time, stopping the need to produce repetitive code, and you’ll be able to build&nbsp;<b>applications</b>&nbsp;rapidly (RAD).Laravel Tutorial – Learn Laravel in simple way starting from basic to advanced concepts with examples. Laravel Tutorial For Beingners, In this Laravel Tutorial Learn Laravel Step By Step&nbsp;Guide to Building Your Laravel&nbsp; Applications. Also Learn Laravel Topics Like Laravel Installation, Laravel Passport, Laravel Email Verification, Laravel Pagination, Laravel Rest full apis, Laravel Crud. A complete step by step guide.&nbsp;widows&nbsp;and&nbsp;ubuntu&nbsp;both&nbsp;system&nbsp;are&nbsp;installation&nbsp;process&nbsp;here.
                        </p>
                    </div> 
                </header>
                
            </div>
            
        </div>
    </div>
</section>

<header class="page-header" itemscope="itemscope" itemtype="">
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
       

 
@endsection

