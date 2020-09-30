@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<!-- Text editor (ckeditor)  -->
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<!-- End text editor -->
<script
    src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous"></script>

<script type="text/javascript">


  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //get provider branches
    $(document).on('click', '#projects_update', function (e) {
        e.preventDefault();
        // deze stukje voor de (text editor)
        for (instance in CKEDITOR.instances) {
       CKEDITOR.instances[instance].updateElement();
        }
        var formData = new FormData($('#projectsFormUpdate')[0]);
        $.ajax({
            type: 'post',
            enctype:"multipart/form-data",
            url: "{{route('ajax.project.update')}}",
            data: formData,
            processData : false,
            contentType:false,
            cache:false,
            success: function (data) {
                if(data.status == true)
                    swal("Done!", data.msg, "success");
                   
            },
            error: function (data){
                if(data.status == false)
                    // alert(data.  msg)
  
                    swal("Error!", data.msg, "error");
            }
        });
    });

</script>
