
<!--Left Sidebar-->
<div class="mdl-layout__drawer">
    <div class="nicescroll-bar">
        <div class="drawer-profile-wrap">
            <div class="candidate-img-drawer mt-25 mb-20"></div>
            <span class="candidate-name block mb-10 text-center"></span>

        </div>
        <div class="mdl-scroll-spy-2">
            <ul class="mdl-navigation">
                <!-- Her to get all category name -->
                <?php $Categorys = App\Models\Category::all(); ?>
                @foreach($Categorys as $Category)
                <li><a class="mdl-navigation__link border-top-sep border-bottom-sep" href="{{action('Category\CategoryController@getOneCategory', $Category-> id)}}"  name="{{$Category-> id}}"><i class="zmdi zmdi-shield-check pr-15"></i><span class="font-capitalize">{{ $Category-> name}}</span></a></li>
                @endforeach
                <!-- End get category name -->	
            </ul>
        </div>
        <div class="drawer-footer mt-50 mb-30 text-center">
            <p class="font-12 mt-10"> Ibrahim Sadour &copy;  {{ now()->year }}.</p>
        </div>
    </div>
</div>       
<!--/Left Sidebar-->
