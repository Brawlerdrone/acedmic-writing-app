


// $(document).ready(function () {

//     $('#my_service').on('change' , function (){
//         var service_id = this.value;

//         // console.log(service_id);

//         $('#price').html('');

//        $.ajax({

//         url : "get-price/" + service_id,
//         dataType: 'json',
       
//         type: 'GET',

//         success : function(val){

//          $('#price').append('<h4 class="ls0 center">'+  +'</h4>');

//           console.log(val)
//         }

//        });
       
//     })
// })
$(document).ready(function(){

    $('.serviceCategory').change(function(){

        console.log('it works');

        var service_id = $(this).val();

        console.log(service_id);

        var pr = " ";
        

        var priceDiv = $('.service_price');
        var paperDiv = $('#paper_id');
        console.log(paperDiv);
        //alert(priceDiv);
        //Getting the price of the selected service
        $.ajax({

            type: 'get',
            url : '/getServicePrice/' + service_id,

            data: {
                'id' : service_id,

            },
            dataType: 'json',

            success: function(data){
               // console.log(data);
                priceDiv.html(" ");

                pr += '<p class="ls0 center"> $'+data.price+'</p>';

                priceDiv.append(pr);

            }
        })
        //Fetching the subservices of the selected services
        $.ajax({
            type : 'get',
            url : '/getPapersUnderService/' + service_id,

            data : {

                "_token":"{{ csrf_token() }}"
               
            },

            dataType : 'json',
            success : function(data){
                console.log(data);
                //paperDiv.html(" ");
                paperDiv.empty();
                paperDiv.focus();
                paperDiv.append('<option value="">-- Select Paper --</option>');

               
                $.each(data, function(key,value){
                    //console.log(value);
                    $('select[name="paper_id"]').append('<option value="'+ key +'">' + value.name+ '</option>');
                });
               // pr += '<option value= '+data.id+'> '+data.name+'</option>';

                //paperDiv.append('<option value= '+data.id+'> '+data.name+'</option>');


            },

        })
    })
})