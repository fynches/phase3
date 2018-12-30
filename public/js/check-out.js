$(document).ready(function( $ ) {
    
   $('.remove').click(function(event) {
       event.preventDefault();
       var id = $(this).data( "id" );
        removeGift(id);
    });
    
    $('#place-order').click(function(event) {
       event.preventDefault();
        placeOrder();
    });
    
function placeOrder() {
 
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    
    var name = $('#cc_name').val();
    var number = $('#cc_number').val();
    var month = $('#cc_month').val();
    var year = $('#cc_year').val();
    var cvv = $('#cc_cvv').val();
    var fname = $('#cc_fname').val();
    var lname = $('#cc_lname').val();
    var address = $('#cc_address').val();
    var city = $('#cc_city').val();
    var state = $('#cc_state').val();
    var zip = $('#cc_zip').val();
    var country = $('#cc_country').val();
    var email = $('#cc_email').val();
    var confirm = $('#cc_confirm').val();
    var total = $('#payment-total').val();
    
    $('#last-row').empty();
   
    $.ajax({
    	type:'POST',
    	url:'/checkout/place-order',
    	data:{
    	    name:name,
    	    number:number,
    	    month:month,
    	    year:year,
    	    cvv:cvv,
    	    fname:fname,
    	    lname:lname,
    	    address:address,
    	    city:city,
    	    state:state,
    	    zip:zip,
    	    country:country,
    	    email:email,
    	    confirm:confirm,
    	    total:total
    	},
    	success:function(data){	
    	    console.log(data);
    	    if(data.success == 1) {
            	        var url = "/checkout-success";
                        $(location).attr('href',url);
    	    } else {
    	        $('#last-row').append('<div class="alert alert-danger">'+data.result+'</div>');
    	    }
    	},
    	error:  function (error) {
    	    
    	}
    });
}    

function removeGift(id) {
 
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                
    $.ajax({
    	type:'POST',
    	url:'/checkout/remove-gift',
    	data:{
    	    gift_id:id
    	},
    	success:function(data){	
    	    
    	    $('#prch-'+data.result).remove();
    	    
    	    $('.cart-items').each(function(){
              var totalPoints = 0;
              $(this).find('.purchase-amounts').each(function(i,n){
                totalPoints += parseInt($(n).val(),10); 
              });
              $('#total').text(totalPoints);
              $('#payment-total').val(totalPoints);
            });
    	},
    	error:  function (error) {
    	    
    	}
    });
}

});