 $(document).ready(function () {
 		$("#signupForm").validate({
	        ignore: [],
	        highlight: function (element) {
	            $(element).parent('div').addClass('has-error');
	        },
	        unhighlight: function (element) {
	            $(element).parent('div').removeClass('has-error');
	        },
	        errorClass: 'help-block help-block-error',
	        errorElement: 'div',
	        rules: {
				email: {required: true},
				password: {required: true, minlength: 8},
				confirm_password: {required: true, minlength: 8, equalTo: "#signup-password"},
			},
			messages: {
			    confirm_password: {equalTo: "Password does not match"},
			},
	        errorPlacement: function (error, element) {         
	                error.insertAfter(element);           
	        },
	        success: function (element) {
	            $(element).parent('.form-group').removeClass('has-error');
        	}
		});
		
		$( '#signupForm' ).on( 'submit', function(e) {
			e.preventDefault();
			if($(this).valid()) {
				$.ajax({
					type: 'post',
					url: '/signup',
					data: {
						'_token': $('input[name=_token]').val(),
						'email': $('input[name=email]').val(),
						'password': $('input[name=password]').val()
					},
				   success: function(data) {
					   	if(data.result == "email-exists"){
							
							$("div[for='email']").html('User with this email is already registered!');
						}else {
							url = "http://fynches.codeandsilver.com/parent-child-info";
                            $( location ).attr("href", url);
						}
						
					} 
				}).done(function(data) {
				});
			}
			
		});
		
		$("#signinForm").validate({
	        ignore: [],
	        highlight: function (element) {
	            $(element).parent('div').addClass('has-error');
	        },
	        unhighlight: function (element) {
	            $(element).parent('div').removeClass('has-error');
	        },
	        errorElement: 'span',
	        errorClass: 'help-block help-block-error',
	        errorElement: 'div',
	        rules: {
				login_email: {required: true},
			    login_password: {required: true, minlength: 8},
			},
	        errorPlacement: function (error, element) {         
	                error.insertAfter(element);           
	        },
	        success: function (element) {
	            $(element).parent('.form-group').removeClass('has-error');
        	}
		});
		
		$( '#signinForm' ).on( 'submit', function(e) {
		    
		    
			e.preventDefault();
			if($(this).valid()) {
				$.ajax({
					type: 'post',
					url: '/signin',
					data: {
						'_token': $('input[name=_token]').val(),
						'email': $('input[name=login_email]').val(),
						'password': $('input[name=login_password]').val()
					},
				   success: function(data) {
				       console.log(data);
					   	if(data.result == "login-error"){
							
							$("div[for='signin-email']").html('Email and Password combination do not match a current user');
						}else {
							url = "http://fynches.codeandsilver.com/gift-dashboard";
                            $( location ).attr("href", url);
						}
						
					} 
				}).done(function(data) {
				});
			}
			
		});
    });