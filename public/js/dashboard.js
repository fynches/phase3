$(document).ready(function( $ ) {
   $('.delete-gift').click(function(event) {
       var id = $(this).data( "id" )
       event.preventDefault();
        deleteGift(id);
    });
}); 

function deleteGift(id) {

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                
    $.ajax({
    	type:'POST',
    	url:'/gift-dashboard/delete',
    	data:{
    	    gift_page_id:id
    	},
    	success:function(data){	
    	    $('#page-'+id).remove();
    	},
    	error:  function (error) {
    	   
    	}
    });
}