


$(document).ready(function () {

    $('#my_service').on('change' , function (){
        var service_id = this.value;

        // console.log(service_id);

        $('#price').html('');

       $.ajax({

        url : "get-price/" + service_id,
        dataType: 'json',
       
        type: 'GET',

        success : function(val){

         $('#price').append('<h4 class="ls0 center">'+  +'</h4>');

          console.log(val)
        }

       });
       
    })
})