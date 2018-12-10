<!-- SignUp Model -->
<div class="modal fade common-model" id="largeModalSI" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div id="signup-header" class="modal-header text-center">
        <h3 class="signup-title">FYNCHES</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
        
      </div>
      <h4 class="text-center" id="sign_in">Sign In</h4>
      <div class="modal-body-signup">
        <div class="row">
        	<div class="col-sm-12 col-md-12">
        		 {!! Form::open(array(null, null, 'class'=>'form-horizontal','method'=>'POST','id'=>'signinForm', 'onsubmit' => 'event.preventDefault(); return false;')) !!}
             {{ csrf_field() }}

        			<div class="form-group">
        				{!! Form::label('email', 'E-MAIL',array('class' =>'required')); !!}
        	            {!! Form::email('email',null,array('class'=>'form-control','id'=>'email','name'=>'login_email','required' =>'required')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('password', 'PASSWORD',array('class' =>'required')); !!}
						{!! Form::text('password',null,array('class'=>'form-control','id'=>'password','name'=>'login_password','required' =>'required','type')) !!}
					</div>
					<button type="submit" class="btn common pink-btn">SIGN IN WITH EMAIL</button>
					
					<button type="submit" class="btn common blue">SIGN IN WITH FACEBOOK</button>
        		 {!! Form::close() !!}
        		 
        		<div class="terms-conditions">
            	    <div>By creating your Fuynches account you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></div>
            	    <div>Have an account? <a href="#">Sign In</a></div>
        	    </div>
						 <div id="signupSuccessMessage"></div>
						 <div id="signupErrorMessage"></div> 
        	</div>					
        </div>
      </div>
    </div>
  </div>
</div>

