
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

          <script type="text/javascript">


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


             $(document).ready(function(){
                $('#SubmitForm').on('submit',function(e){
                    e.preventDefault();
                    let name = $('#InputName').val();
                    let email = $('#InputEmail').val();
                    let phone = $('#InputMobile').val();
                    let message = $('#InputMessage').val();
                    $.ajax({
                      url: "/StoreData",
                      type:"POST",
                      data:{
                        name:name,
                        email:email,
                        phone:phone,
                        message:message,
                      },
                      success:function(response){
                        $('#successMsg').show();
                        $('#SubmitForm')[0].reset();
                        $('.table').load(location.href+' .table');
                        console.log(response);
                      },
                      error: function(response) {
                        $('#nameErrorMsg').text(response.responseJSON.errors.name);
                        $('#emailErrorMsg').text(response.responseJSON.errors.email);
                        $('#phoneErrorMsg').text(response.responseJSON.errors.phone);
                        $('#messageErrorMsg').text(response.responseJSON.errors.message);
                      },
                      });
                    });
             });


            </script>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
