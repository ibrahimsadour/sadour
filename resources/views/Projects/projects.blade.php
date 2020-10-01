

<section id="portfolio_sec" class="portfolio-sec sec-pad-top-sm">
    <div class="gallery-wrap mb-30">
        <div class="portfolio-wrap project-gallery">
            <ul id="portfolio" class="portf auto-construct  project-gallery" data-col="1">
                @foreach($Projects as $Project)
                    <li  class="item mdl-card mdl-shadow--2dp pa-0 branding">
                        <div class="light-img-wrap mdl-card__title pa-0">
                            <img class="img-responsive" src="{{asset('images/Projects/'.$Project->photo)}}"  alt="Image description" />
                            <span class="img-cap"><a href="{{route('git.one.project',$Project->id)}}" class="project_title"> {{$Project -> name}} </a></span>
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
            <div class="pagination_dev" >{!! $Projects-> links() !!}</div>

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

            
