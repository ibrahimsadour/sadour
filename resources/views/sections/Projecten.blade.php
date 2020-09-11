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
</style>
<section id="portfolio_sec" class="portfolio-sec sec-pad-top-sm">
<h2 class="mb-30">projecten</h2>
    <div class="gallery-wrap mb-30">
        <div class="portfolio-wrap project-gallery">
            <ul id="portfolio" class="portf auto-construct  project-gallery" data-col="3">

                <li  class="item mdl-card mdl-shadow--2dp pa-0 branding">
                    <div class="light-img-wrap mdl-card__title pa-0">
                        <img class="img-responsive" src="img/projecten/sadourtaxi.jpg"  alt="Image description" />
                        <div class="light-img-overlay"></div>
                        <span class="img-cap">Sadour Taxi</span>
                    </div>	
                    <span class="bottom-links mdl-card__actions">
                        <a id="goto_box_1" href=""><i class="zmdi zmdi-eye"></i></a>
                        <a href="https://sadourtaxi.nl/" target="_blank"><i class="zmdi zmdi-format-subject"></i></a>
                    </span>
                </li>

                <li class="item mdl-card mdl-shadow--2dp pa-0  photography">
                    <div class="light-img-wrap mdl-card__title pa-0">
                        <img class="img-responsive" src="img/projecten/sadour.png"  alt="Image description" />
                        <div class="light-img-overlay"></div>
                        <span class="img-cap">Ibrahim Sadour</span>
                    </div>
                    <span class="bottom-links mdl-card__actions">
                        <a id="goto_box_2" href="#"><i class="zmdi zmdi-eye"></i></a>
                        <a href="https://sadour.nl/" target="_blank"><i class="zmdi zmdi-format-subject"></i></a>
                    </span>
                </li>

                <li class="item mdl-card mdl-shadow--2dp pa-0 design">
                    <div class="light-img-wrap mdl-card__title pa-0">
                        <img class="img-responsive" src="img/projecten/carservice.png"  alt="Image description" />
                        <div class="light-img-overlay"></div>
                        <span class="img-cap">Car Service Kuwait</span>
                    </div>
                    <span class="bottom-links mdl-card__actions">
                        <a id="goto_box_3" href="#"><i class="zmdi zmdi-eye"></i></a>
                        <a href="https://carservicekuwait.com/" target="_blank"><i class="zmdi zmdi-format-subject"></i></a>
                    </span>
                </li>
             
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
<!--/Portfolio Sec-->
