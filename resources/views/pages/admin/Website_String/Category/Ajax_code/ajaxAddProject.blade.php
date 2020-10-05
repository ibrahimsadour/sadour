<!-- sweet alert form wanner is info insertd to datebase -->
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<!-- End sweet alert -->

<!-- Text editor (ckeditor)  -->
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<!-- End text editor -->

<!-- deze stukje voor Ajax om de inhoud van de form te toevoegen naar de datebase -->
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script
    src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous">
    
</script>

<script type="text/javascript"  >

    
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //get provider branches
    $(document).on('click', '#projects_submit', function (e) {
        e.preventDefault();

        // deze stukje voor de (text editor)
        for (instance in CKEDITOR.instances) {
       CKEDITOR.instances[instance].updateElement();
        }
        $('#weergeven_error').text('');
        $('#description_error').text('');
        $('#name_error').text('');
        $('#name_url_error').text('');
        $('#title_error').text('');
        $('#keywords_error').text('');
        $('#description_back_error').text('');
        var formData = new FormData($('#projectsForm')[0]);
        $.ajax({
            type: 'post',
            enctype:"multipart/form-data",
            url: "{{route('ajax.category.store')}}",
            data: formData,
            processData : false,
            contentType:false,
            cache:false,
            success: function (data) {
                if(data.status == true)
                    swal("Done!", data.msg, "success");
                   
            },
            error: function (reject){

                var response = $.parseJSON(reject.responseText);
                $.each(response.errors,function(key, val){

                    $('#' + key + "_error").text(val[0]);
                });
            }
        });
    });

</script>
<!-- End Ajax -->
