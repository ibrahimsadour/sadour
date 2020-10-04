
<!-- resources/views/layouts/master.blade.php -->
@extends('Projects.layouts.masterCategories')
<!-- master -->    
@section('OneCategory')
<!--About Sec-->
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
    <section id="portfolio_sec" class="portfolio-sec sec-pad-top-sm">
        <div class="gallery-wrap mb-30">
            <div class="portfolio-wrap project-gallery">
                <ul id="portfolio" class="portf auto-construct  project-gallery" data-col="1">
                @if(isset($AllProjects) && $AllProjects->count() > 0 )
                    @foreach($AllProjects as $OneProject)
                        <li  class="item mdl-card mdl-shadow--2dp pa-0 branding">
                            <div class="light-img-wrap mdl-card__title pa-0">
                                <img class="img-responsive" src="{{asset('images/Projects/'.$OneProject-> photo)}}"  alt="Image description" />
                                <span class="img-cap"><a href="" class="project_title"> {{$OneProject-> name}} </a></span>
                            </div>
                            <div class="subTitle"> 	
                                <div class="subTitle1" >{{$OneProject-> created_at}}<span class="hr_"></span> 
                                <span ><a href="" class="lave_comment">By Admin</a><span class="hr_"></span></span>
                                <span><a href="" class="lave_comment">Leave a Comment</a></span>
                                </div>
                            </div>          
                            <span class="bottom-links mdl-card__actions">
                            <span class="text-muted"><strong>3,757</strong> Viewer</span>

                                <button type="button" class="btn btn-success btn-sm float-right hidden-xl-down"  > 
                                    FREE
                                </button>
                                <a  href=""><i class="zmdi zmdi-eye"></i></a>
                            </span>

                        </li>
                    @endforeach
                @else
                    <li  class="item mdl-card mdl-shadow--2dp pa-0 branding">
                        <div class="light-img-wrap mdl-card__title pa-0">
                            <img class="img-responsive" src="{{asset('images/Projects_No_results/NoResult.png')}}"  alt="Image description" />
                        </div>
                    </li>
                @endif
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

@endsection

            
