@foreach($website_sociaal_contact as $sociaal_links)

<ul class="social-icons mt-10">
    <li>
        <a class="facebook-link" target="_blank" href="{{$sociaal_links ->facebook}}">
            <i id="tt6" class="zmdi zmdi-facebook"></i>
            <div class="mdl-tooltip" data-mdl-for="tt6">
                facebook
            </div>
        </a>
    </li>
    <li>
        <a class="twitter-link" target="_blank" href="{{$sociaal_links ->twitter}}">
            <i id="tt7" class="zmdi zmdi-twitter"></i>
            <div class="mdl-tooltip" data-mdl-for="tt7">
                twitter
            </div>
        </a>
    </li>
    <li>
        <a class="linkedin-link" target="_blank" href="{{$sociaal_links ->linkedin}}">
            <i id="tt8" class="zmdi zmdi-linkedin"></i>
            <div class="mdl-tooltip" data-mdl-for="tt8">
                linkedin
            </div>
        </a>
    </li>
    <li>
        <a class="dribbble-link"target="_blank" href="{{$sociaal_links ->twitter}}">
            <i id="tt9" class="zmdi zmdi-google"></i>
            <div class="mdl-tooltip" data-mdl-for="tt9">
                Goolge
            </div>
        </a>
    </li>
    <li>
        <a class="instagram-link" target="_blank" href="{{$sociaal_links ->instagram}}">
            <i id="tt10" class="zmdi zmdi-instagram"></i>
            <div class="mdl-tooltip" data-mdl-for="tt10">
                instagram
            </div>
        </a>
    </li>
</ul>

@endforeach