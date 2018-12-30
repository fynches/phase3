jQuery(document).ready(function( $ ) {
    
    	
		var $uploadCrop;

		function readFile(input) {
 			if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            
	            reader.onload = function (e) {
					$('.upload-demo').addClass('ready');
	            	$uploadCrop.croppie('bind', {url: e.target.result}).then(function(){});
	            	
	            }
	           reader.readAsDataURL(input.files[0]);
	        }
	        else {
		        swal("Sorry - you're browser doesn't support the FileReader API");
		    }
		}

		$uploadCrop = $('#upload-demo').croppie({
			viewport: {
				width: 300,
				height: 300,
				type: 'circle',
			},
			enableExif: true,
			showZoomer:true,
			enableResize:true
		});

		$('#upload').on('change', function () { readFile(this); });
		$('.upload-result').on('click', function (ev) {
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'viewport'
			}).then(function (resp) {
				popupResult({
					src: resp
				});
			});
		});
		
function popupResult(result) {
    
        var url = window.location.pathname;
        var info = url.split('/')[1];
        var slug = url.split('/')[2];
		var html;
		if (result.src) {
		    if(info == 'parent-child-info') {
		        $('#drag form p').remove();
                $('#photo-form').css("border", "none");
                $( '#picture' ).remove();
                var image = '<img id="picture" src="'+ result.src +'" style="padding:20px"/>';
                $( '#pictures' ).append(image);
		    }
		    else {
    		    $('#Mychild_photo img').attr('src',result.src);
    		    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            
                 $.ajax({
        			type: 'post',
        			url: '/profile-image',
        			data: {
        			    image:result.src,
        			    slug:slug
        			},
        		   success: function(data) {
        		       
                    }
        		});
    		}
	    }
	}		
});



