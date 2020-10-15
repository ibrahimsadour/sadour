


<!--Contact Sec-->
<section id="contact_sec" class="contact-sec sec-pad-top-sm">
    <h2 class="mb-35">contact</h2>
    <div class="row">
        <div id="form_card_height" class="col-sm-7 mb-30">
            <div  class="mdl-card mdl-shadow--2dp" data-ng-controller="ContactController">
                <h4 class="mb-10 font-unsetcase">Hey Daar, blij om van je te horen.</h4>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
                        @if(\Session::has('success'))
                        <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif
                <form method="POST" action="{{route('contact.create')}}">
                {{csrf_field()}}

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-group">
                            <input autocomplete="off" data-ng-model="formData.inputName" class="mdl-textfield__input" type="text" id="inputName" name="name" required>
                            <label class="mdl-textfield__label" for="inputName">naam*</label>
                        </div>	

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-group">
                            <input autocomplete="off" data-ng-model="formData.inputEmail" class="mdl-textfield__input" type="email" id="inputEmail" name="email" required>
                            <label class="mdl-textfield__label" for="inputEmail">email*</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-group">
                            <textarea 
                            data-ng-model="formData.inputMessage" 
                            class="mdl-textfield__input"  rows="3" id="inputMessage" name="message" required></textarea>
                            <label class="mdl-textfield__label" for="inputMessage">bericht*</label>
                        </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" />
                    </div>
                </form>
                <p class="block result" data-ng-class="result"></p>
            </div>
        </div>
        <div class="col-sm-5 mb-30">
            <div class="mdl-card mdl-shadow--2dp pa-0">
                <div id="map_canvas"></div>
            </div>
        </div>
    </div>
</section>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<!--/Contact Sec-->


