jQuery(document).ready(function( $ ) {
    var count = 0;
    
    $('body').on('click', 'button[data-target="#myModal"]',function() {
           if(count < 1) {
              $("#lightSlider").lightSlider({
                  gallery:true,
                  controls:false,
                  enableDrag:false,
                  item:1
              });
              count++;
           }
        });
        
     
     
    $('.hoverimg').mouseenter(function(event) {
       event.preventDefault();
        var id = $(this).data( "id" );
        $('#cartimg-'+id).show();
        $('#cancel_1-'+id).show();
    });    
    
    $('.hoverimg').mouseleave(function(event) {
       event.preventDefault();
        var id = $(this).data( "id" );
        $('#cartimg-'+id).hide();
        $('#cancel_1-'+id).hide();
    });  
    
    $('.added_gifts .draggable').mousedown(function() {
        if($(".added_gifts").is(':ui-sortable')) {
            $(".added_gifts").sortable('enable');
        }
        else {
            $(".added_gifts").sortable({
                update: function(event, ui) {
                    $(".added_gifts").sortable('disable');
                    var ids = [];
                    var slug = window.location.pathname.split('/')[2];
                    $('.added_gifts .reco_col').each(function(i){
                        if($(this).length && !isNaN(parseInt($(this).attr('id'),10))) {
                            ids[i] = parseInt($(this).attr('id'),10);
                        }
                    });
                    ids = ids.filter(function(v){return v!== (undefined || null)});
                   $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}}); 
                   $.ajax({
            			type: 'post',
            			url: '/giftSort',
            			data: {
            			    ids:ids,
            			    slug:slug
            			},
            		   success: function(data) {
            		       
                        }
            		});
                }
            });
        }
    });
    
    $('body').on('click','button[name="add"]',function() {
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
				       var style;
				       if(data.favorite == 'favorited-button') {
				           style = 'style="color:red;"';
				       }
				       else {
				           style = 'style="color:white;"';
				       }
				       if(data.is == 1) {
                        return;
                    } else {
                        var gift =  '<div class="col-md-3 reco_col pointer" id="'+ id +'">'+
    '                            <div style="position: relative; background: url('+ data.image +'); width:100%; height:250px; background-size:100% 100%; ">'+
    '                                <div style="position: absolute; top: 1em; left: 1em; font-weight: bold; color: #fff;">'+
    '                                    <a href="javascript:void(0)" class="'+ data.favorite +'" data-pnum="'+ id +'"><i class="fas fa-heart fa-2x" '+ style +'></i></a>'+
    '                                </div>'+
    '                            </div>'+
    '                            <div class="shad-effect">'+
    '                                <label>'+ data.gift.title +'</label>'+
    '                                <p>'+ data.business +'</p>'+
    '                                    <div class="row" id="marg">'+
    '                                        <div class="col-md-6 col-xs-6">'+
    '                                            <button class="btn btn-lg add_submit" name="remove" data-id="'+ id +'">ADDED</button>'+
    '                                        </div>'+
    '                                        <div class="col-md-6 col-xs-6 text-right">'+
    '                                           <div class="col-md-6 col-xs-6"> <p class="text-center" style="font-weight:bold;font-size:16px;">$'+ data.gift.price +'</p><p class="text-center">GIFTED</p></div>'+
    '                                           <div class="col-md-6 col-xs-6"><p class="text-center" style="font-weight:bold;font-size:16px;">$45</p><p class="text-center">NEEDED</p></div>'+
    '                                        </div>'+
    '                                    </div>  '+
    '                                   </div>'+    
    '                        </div>';

                        $('#added').append(gift);
                        
                        $('.btns-'+id).html(
                        '<div class="row" id="marg">'+
                            '<div class="col-md-6 col-xs-6">'+
                                '<button class="btn btn-lg add_submit" data-id="'+ id +'" name="remove">ADDED</button>'+
                            '</div>'+
                            '<div class="col-md-6 col-xs-6 text-right">'+
                                '<div class="col-md-6 col-xs-6"> <p class="text-center" style="font-weight:bold;font-size:16px;">$'+ data.gift.price +'</p><p class="text-center">GIFTED</p></div>'+
                                '<div class="col-md-6 col-xs-6"><p class="text-center" style="font-weight:bold;font-size:16px;">$45</p><p class="text-center">NEEDED</p></div>'+
                            '</div>'+
                        '</div>');
                    }
				} 
			});
    });
    
    $('body').on('click','button[name="remove"]',function() {
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
				          $('#added #' + data.id).remove();
				          $('.btns-'+id).html(
				             ' <div class="row">'+
                                        '<div id="img_1" class="col-md-6 col-xs-6">'+
                                            '<button class="btn btn-primary btn-lg btn_purp gift-dets" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>'+
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
    
    //$('button[data-target="#gift_Add"]').click(function() {
    //    var id = $(this).parent().parent().parent().parent().attr('id');
    //    $.ajax({
	//				type: 'get',
	//				url: '/giftInfo',
	//				data: {id:id},
	//			   success: function(data) {
	//			       $('#gift_image').attr('src',data.image);
	//			       $('#gift_url').val(data.gift.site_url);
	//			       $('#gift_title').val(data.gift.title);
	//			       $('#gift_desc').val(data.gift.details);
	//			       $('#gift_price').val(data.gift.details);
	//			    } 
	//			}).done(function(data) {
	//			    
	//			});
    //});
        
        var options = {
          enableHighAccuracy: true,
          timeout: 5000,
          maximumAge: 0
        };
        
        function success(position) {
        	$.ajax({
        		type: "POST",
        		url: 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCNcwN5-86eVueoS2GNuw9i_guAdrJrjAU&latlng=' + position.coords.latitude + ',' + position.coords.longitude + '&sensor=true',
        		dataType: "json",
        		beforeSend: function(){
        		},
        		error: function(err){},
        		success: function(data) {
        			var addresses = data.results; // cache results in a local var
        			$.each(addresses, function(i){ // iterate through to find a postal code
        				if(this.types[0]=="postal_code"){ // check that the type is a postal code
        					var postal=this['address_components'][0]['long_name']; // grab postal string
        					if(postal.length > 3){ // is the result is more then 3 letter shorthand use it
        						// do something with your result and then lets break the iteration
        						$('#child-zip-code').val(postal);
        						console.log($('#child-zip-code').val());
        						return false;
        					}
        				}
        			});
        		} // end success
          }); // end ajax
        }
        
        function error(err) {
          console.warn(`ERROR(${err.code}): ${err.message}`);
        }

        
        navigator.geolocation.getCurrentPosition(success, error, options);
        
    
    $( '#update-child-zipcode' ).click(function() {
		    
				$.ajax({
					type: 'post',
					url: '/update-child-zipcode',
					data: {
					    '_token': $('input[name=_token]').val(),
					    'child_zipcode': $('#child-zipcode').val(),
						'page_id': $('#gift_head').data('page-id'),
					},
				   success: function(data) {
				       
				       $('#giftZip').removeClass('in').hide();
				       $('body').removeClass('modal-open').css({"padding-right": ""});
				       $( '.modal-backdrop' ).remove();
				       $('#child-zip-code').text(data.zip);
				       $('#base-zip').text(data.zip);
				       $('#child-zip-code').click();
				     
					} 
				}).done(function(data) {
				    
				});
		
			
		});
    
    $( '.background-image' ).click(function() {
		    
				$.ajax({
					type: 'post',
					url: '/background-image',
					data: {
					    '_token': $('input[name=_token]').val(),
						'image_id': $(this).data('image-id'),
						'page_id': $('#gift_head').data('page-id'),
					},
				   success: function(data) {
				       
				       $('#gift_background').removeClass('in').hide();
				       $('body').removeClass('modal-open').css({"padding-right": ""});
				       $( '.modal-backdrop' ).remove();
				       $('section.gift_experience').css({"background" : 'url('+data.url+')', "background-size" : 'cover'}); 
				       $('.bg').click();
				     
					} 
				}).done(function(data) {
				    
				});
		
			
		});
	
	$('.gift-dets').click(function() {	
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
		
	$('body').on('click','#gifts', function() {	
	    $('#gift_descrip').show();
	    $('#bus_descrip').hide();
	    
    	});
    	
    	$('body').on('click','#business',function() {	
    	    $('#gift_descrip').hide();
    	    $('#bus_descrip').show();
    	    
    	});
        
	
	$('#remove_photo').mouseenter(function() {
	    $('#prof_pic').hide();
	    $('#hover_pic').show();
	});	
	
	$('#remove_photo').mouseleave(function() {
	    $('#prof_pic').show();
	    $('#hover_pic').hide();
	});	
	
    
    $( '#gft_title, #gft_det, #inp_date, #inp_age, #inp_host ' ).on( 'focusout', function(e) {
        
				$.ajax({
					type: 'post',
					url: '/update-gift-page',
					data: {
						'_token': $('input[name=_token]').val(),
						'gft_title': $('#gft_title').val(),
						'gft_det': $('#gft_det').val(),
						'inp_date': $('#inp_date').val(),
						'inp_age': $('#inp_age').val(),
						'inp_host': $('#inp_host').val(),
						'slug': $('#slug').val()
					},
				   success: function(data) {
					  $('.gift_details .text-right').css('visibility', 'hidden');
					  $('.gift_box .text-right').css('visibility', 'hidden');
					} 
				}).done(function(data) {
				    
				});
		
			e.preventDefault();
		});
		
	$('.gift_box input').focus(
    function(){
        $(this).css({'color' : '#000'});
    });	
    
    $('.gift_details input').focus(
    function(){
        $(this).css({'color' : '#000'});
    });	
    
    $('.gift_details textarea').focus(
    function(){
        $(this).css({'color' : '#000'});
    });	
});

function copyURL() {
  /* Get the text field */
  var copyText = document.getElementById("inp_link");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  //alert("Copied the text: " + copyText.value);
}