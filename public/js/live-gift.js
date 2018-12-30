$(document).ready(function( $ ) {
   $('#post_message').click(function(event) {
       event.preventDefault();
        sendMessage();
    });
    $('.give-gift').click(function(event) {
       event.preventDefault();
        $(this).hide();
        var id = $(this).data( "id" );
        $('#prch-'+id).show();
        $('#dlr-'+id).show();
        $('#img-'+id).hide();
        $('#imgrp-'+id).show();
        $('#para-'+id).show();
        $('#gift-image-'+id).css('cursor', 'pointer');
    });
    
    $('.cancel').click(function(event){
        event.preventDefault();
         $(this).hide();
         var id = $(this).data( "id" );
         $('#imgrp-'+id).hide();
         $('#prch-'+id).hide();
         $('#dlr-'+id).hide();
         $('#gft-'+id).show();
         $('#img-'+id).show();
         
    });
    
     $('.purchase').keyup(function(event){
         var id = $(this).data( "id" );
         var amount = $(this).val();
         var needed = $('#needed-'+id).data( "amount" );
         var gifted = $('#gifted-'+id).data( "amount" );
         
         var need = parseInt(needed) - parseInt(amount);
         var gift = parseInt(gifted) + parseInt(amount);
         
         $('#checkout').show();
         
         if(need < 0) {
             var need = 0;
         }
         
         if(isNaN(need)) {
             var need = needed;
             
         }
         
         if(isNaN(gift)) {
             var gift = gifted;
         }
         $('#needed-'+id).text(need.toFixed(2));
         $('#gifted-'+id).text(gift.toFixed(2));
         
         $('#needed-'+id).data('result', need);
         $('#gifted-'+id).data('result', gift);
         
        var sum = 0;
        $(".purchase").each(function(){
            sum += +$(this).val();
        });
        $('#total').text(sum.toFixed(2));
         
        var giftedAmount = $('#gifted-'+id).data( "result" );
        
        cart(id, giftedAmount); 
         
    });
    
    $('.cart').click(function(event){
        var id = $(this).data( "id" );
        var needed = $('#needed-'+id).data( "result" );
        var gifted = $('#gifted-'+id).data( "result" );
        
        cart(id, gifted);
        
        if(needed <= 0){
            $('#fagift-'+id).show();
            $('#imgrp-'+id).hide();
            $('#para-'+id).hide();
        }
        else {
            $('#fagift-'+id).hide();
            $('#imgrp-'+id).hide();
            $('#para-'+id).hide();
            $('#img-'+id).show();
            $('#gft-'+id).show();
            $('#prch-'+id).hide();
            $('#dlr-'+id).hide();
        }
        
    });
    
});

function giveGift() {
    var name = $('#live_textname').val();
    var message = $('#live_textmsg').val();
    var childs_name = $('#childs_name').val();
    var textname = $('#live_textname').attr('name');
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    
   
                
    $.ajax({
    	type:'POST',
    	url:'/gift-live/message',
    	data:{
    	    message:message,
    	    name:name,
    	    childs_name: childs_name
    	},
    	success:function(data){	},
    	error:  function (error) {
    	    alert('error');
    	}
    });
}

function cart(id, giftedAmount) {
    var amount = $('#prch-'+id).val();
    var pageid = $('#page-id').val();
    console.log(amount);
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                
    $.ajax({
    	type:'POST',
    	url:'/gift-live/cart',
    	data:{
    	    amount:amount,
    	    gift_page_id:pageid,
    	    gift_id:id
    	},
    	success:function(data){	
    	    
    	},
    	error:  function (error) {
    	   
    	}
    });
}

function sendMessage() {
    var name = $('#live_textname').val();
    var message = $('#live_textmsg').val();
    var childs_name = $('#childs_name').val();
    var textname = $('#live_textname').attr('name');
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    
   
                
    $.ajax({
    	type:'POST',
    	url:'/gift-live/message',
    	data:{
    	    message:message,
    	    name:name,
    	    childs_name: childs_name
    	},
    	success:function(data){
  
    	    var text = $('#live_textmsg').val();
    	    var name = $('#live_textname').val();
    	    $('#live_textmsg').val('');
    	    $('#live_textname').val('');
    	    
            var html = '<div class="row" id="msg">'+
            '             '+
            '            <div class="col-md-1">'+
            '                <img src="http://fynches.codeandsilver.com/public/front/img/prof_pic.png" style="width:100%">'+
            '            </div>'+
            '           '+
            '            <div class="col-md-11">'+
            '                <div class="row">'+
            '                    <div class="col-md-2">'+
            '                        <h5><strong>'+ name +'</strong></h5>'+
            '                    </div>'+
            '                    <div class="col-md-10">'+
            '                        <p style="color:#d9d9d9;margin: 5px 0 0 0;"><i class="far fa-clock"></i> 12 minutes ago</p>'+
            '                    </div>'+
            '                </div>    '+
            '                '+
            '                <div class="row">'+
            '                    <div class="col-md-12" >'+
            '                        <p class="small_msg">'+ text +'</p>'+
            '                    </div>'+
            '                </div>'+
            '                '+
            '            </div>'+
            '            '+
            '        </div>';
            	
            $('#messages').prepend(html);
    	    
    	},
    	error:  function (error) {
    	    alert('error');
    	}
    }); 
}