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
    

		var html;
		var reader  = new FileReader();
		if (result.html) {
			$('#Mychild_photo img').attr('src',result.html);
		}
		if (result.src) {
		    $('#Mychild_photo img').attr('src',result.src);
		}
		
		
		
	}		
		
});



