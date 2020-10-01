@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script
    src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable();
    } );

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //get provider branches
    $(document).on('click', '.delete_btn', function (e) {
        e.preventDefault();
        var category_id = $(this).attr('category_id');
    
        $.ajax({
            type: 'post',
            enctype:"multipart/form-data",
            url:  "{{route('ajax.category.destroy')}}" +'?_token=' + '{{ csrf_token() }}',
            data: {
                '_token'   :   $('meta[name="csrf_token"]').attr('content'),
                "id" : category_id
            },
            
            success: function (data) {

                    if(data.status == true)
                
                    swal("Done!", data.msg, "success");
                    
                    $('.projectRow'+ data.id).remove();

            },error: function (data){

                    if(data.status == false)
                    // alert(data.  msg)
                    swal("Error!", data.msg, "error");
                
            }
        });
    });
</script>
