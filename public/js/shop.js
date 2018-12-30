jQuery(document).ready(function( $ ) {
    $('#shop-items').on('click', 'button[name="add"]', function() {
        var id = $(this).data('id');
        var slug = window.location.pathname.split('/')[2];
         $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
					type: 'post',
					url: '/addGift',
					data: {
					    id:id,
					    slug:slug
					},
				   success: function(data) {
	
                        $('#' + id +' button[name="add"]').html("ADDED");
                        $('#' + id +' button[name="add"]').attr('name','remove');
                        $('.btns-'+id).html(
                        '<div class="row" id="marg">'+
                            '<div class="col-md-6 col-xs-6">'+
                                '<button class="btn btn-lg add_submit" name="remove" id="add" data-id="'+ id +'">ADDED</button>'+
                            '</div>'+
                            '<div class="col-md-6 col-xs-6 text-right">'+
                                '<div class="col-md-6 col-xs-6"> <p class="text-center" style="font-weight:bold;font-size:16px;">$'+ data.gift.price +'</p><p class="text-center">GIFTED</p></div>'+
                                '<div class="col-md-6 col-xs-6"><p class="text-center" style="font-weight:bold;font-size:16px;">$45</p><p class="text-center">NEEDED</p></div>'+
                            '</div>'+
                        '</div>');
				} 
			});
    });
    
    $('#shop-items').on('click', 'button[name="remove"]', function() {
        var id = $(this).data('id');
        var slug = window.location.pathname.split('/')[2];
         $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
					type: 'post',
					url: '/removeGift',
					data: {
					    id:id,
					    slug:slug
					},
				   success: function(data) {
				       if(data.is == 1) {
				          $('.btns-'+id).html(
				             ' <div class="row">'+
                                        '<div id="img_1" class="col-md-6 col-xs-6">'+
                                            '<button class="btn btn-primary btn-lg btn_purp" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>'+
                                        '</div>'+
                                        '<div class="col-md-6 col-xs-6" id="gift_para">'+
                                            '<p><i class="fas fa-map-marker-alt"></i>  1.1 mi</p>'+
                                        '</div>'+
                                    '</div>'+   
                                    
                                    '<div class="row">'+
                                        '<div class="col-md-6 col-xs-6">'+
                                            '<button class="btn btn-primary btn-lg yellow_submit" name="add" data-id="'+id+'">QUICK ADD</button>'+
                                        '</div>'+
                                        '<div class="col-md-6 col-xs-6 text-right" id="gift_price">'+
                                            '<p style="font-weight:bold;font-size:18px;">$'+ data.gift.price +'</p>'+
                                            '<p>Est. Price <i class="fas fa-info-circle"></i></p>'+
                                       '</div>'+
                                    '</div>'
				              );
				       }
				       
				        
				} 
			});
    });
    
    $('.checkbox').click(function(){
        var categories = [];
        var ages = []; 
        var miles = [];
        $('.checkbox[data-id="category"]:checked').each(function(){ categories.push(this.id); });
        $('.checkbox[data-id="age"]:checked').each(function(){ ages.push(this.id); });
        $('.checkbox[data-id="miles"]:checked').each(function(){ miles.push(this.id); });
        console.log(categories);
        console.log(ages);
        console.log(miles);
        
        if((categories === undefined || categories.length === 0) && (ages === undefined || ages.length === 0) && (miles === undefined || miles.length === 0)) {
            $('#shop-items').children().show();
        }
        
        else {
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            $.ajax({
    			type: 'post',
    			url: '/category',
    			data: {
    			    categories:categories,
    			    ages:ages,
    			    miles:miles
    			},
    		   success: function(data) {
    		       console.log(data);
                       $('#shop-items').children().hide();
                       
                       for(var i in data.gift_id) {
                        $('#shop-items #' + data.gift_id[i]).show();
                       }
    	            }
            });
        }
    });
    
    $('#shop-items').on('click','.favorite-button',function () {
    
       var favorite = $(this).parent().parent().parent().attr('id');
       var slug = window.location.pathname.split('/')[2];
       var button = $(this);
       
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            
            $.ajax({
                type:'POST',
                url:'/favorite',
                data:{
                    id:favorite,
                    slug:slug
                },
                success:function(data){
                    if(data.is == '0') {
                        button.css('color', 'red');
                    }
                    else if(data.is == '1') {
                        button.css('color', 'white');
                    }
                },
                error:  function (error) {
                   // alert('not added');
                }
        });
               
   });
   $('#shop-items').on('click','.gift-dets',function() {	
	    var id = $(this).data('id');
	    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
					type: 'post',
					url: '/giftDetails',
					data: {id:id},
				   success: function(data) { 
                        var myvar = '<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$(\'#myModal\').hide();">'+
                        '          <span aria-hidden="true">×</span>'+
                        '        </button>'+
                        '          <div class="col-md-6">'+
                        '            <ul id="lightSlider" style="width:100%!important;height:100%;">'+
                        '              <li data-thumb="'+ data.images[0] +'" style="width:100%!important;">'+
                        '                  <img src="'+ data.images[0] +'" width="100%" alt="picture"/>'+
                        '              </li>'+
                        '              <li data-thumb="'+ data.images[1] +'">'+
                        '                  <img src="'+ data.images[1] +'" width="100%" alt="picture"/>'+
                        '              </li>'+
                        '              <li data-thumb="'+ data.images[2] +'">'+
                        '                  <img src="'+ data.images[2] +'" width="100%" alt="picture"/>'+
                        '              </li>'+
                        '              <li data-thumb="'+ data.images[3] +'">'+
                        '                  <img src="'+ data.images[3] +'"  width="100%" alt="picture"/>'+
                        '              </li>'+
                        '            </ul>'+
                        '        </div>'+
                        '        '+
                        '        '+
                        '        '+
                        '        '+
                        '        <div class="col-md-6" id="images_gift">'+
                        '            <h5 >'+ data.bName +'</h5>'+
                        '            <h1>'+ data.gift.title +'</h1>'+
                        '            <h4><strong>AGES   </strong>'+ data.age_range +'</h4>'+
                        '            <div class="col-md-6" style="padding-left:0">'+
                        '                <h4><a id="gifts">GIFT DESCRIPTION</a></h4>'+
                        '            </div>'+
                        '            <div class="col-md-6">'+
                        '                <h4><a id="business">BUSINESS INFO</a></h4>'+
                        '            </div><br><br>'+
                        '         '+
                        '                '+
                        '            <div id="gift_descrip">'+
                        '                <p>'+
                        '                    <strong>Description</strong><br>'+ data.gift.description +'</p>'+
                        '          '+
                        '                <p><br>'+
                        '                    <Strong>Details</Strong><br>'+ data.gift.details +
                        '                </p><br><br>'+
                        '            </div>'+
                        '            '+
                        '            '+
                        '             <div id="bus_descrip" style="display:none">'+
                        '                <p>'+ data.details +
                        '                </p>'+
                        '          '+
                        '                <p>'+
                        '                    <strong>Address</strong><br>'+ data.address +
                        '                </p>'+
                        '                <p>'+
                        '                    <strong>Phone</strong><br>'+ data.phone +
                        '                </p>'+
                         '                <p>'+
                        '                    <strong>Website</strong><br>'+ data.website +
                        '                </p>'+
                        '            </div>'+
                        '            '+
                        '            '+
                        '            '+
                        '        <div class="col-md-6">'+
                        '            <div class="row">'+
                        '                <button class="btn btn-primary yellow_submit" id="add-to-gifts">ADD TO GIFTS</button>'+
                        '                '+
                        '            </div>'+
                        '        </div>'+
                        '        <div class="col-md-6">'+
                        '            <label for="fidt-amount">GIFT AMOUNT&nbsp;&nbsp;&nbsp;</label><a href ="" data-toggle="tooltip" data-placement="top" title="You will receive the cash equivalent of this gift amount when the gift is purchased from your gift page."><i class="fas fa-info-circle" style="color:black;"></i></a>'+
                        '            <div class="row input-group">'+
                        '                <span class="input-group-addon" style="padding-bottom:4px;">$</span>'+
                        '                <input class="form-control" id="gift-amount" type="text">'+
                        '            </div>'+
                        '        </div>'+
                        '      </div>'+
                        '      <div class="modal-footer" style="border-top: 0px solid #e5e5e5;">'+
                        '      </div>';
	                
	                 $('#myModal .modal-body').empty();
	                 $('#myModal .modal-body').append(myvar);
	                 $('#lightSlider').lightSlider({
                      gallery:true,
                      controls:false,
                      enableDrag:false,
                      item:1
                        });
             }
             
             

        });	
	});	
});