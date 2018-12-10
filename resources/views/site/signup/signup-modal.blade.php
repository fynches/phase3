<!-- SignUp Model -->
<div class="modal fade common-model" id="largeModalS" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div id="signup-header" class="modal-header text-center">
        <h3 class="signup-title">FYNCHES</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
        
      </div>
      <h4 class="text-center">Sign up</h4>
      <div class="modal-body-signup">
        <div class="row">
        	<div class="col-sm-12 col-md-12">
        		 {!! Form::open(array( null, null, 'class'=>'form-horizontal','method'=>'POST','id'=>'signupForm', 'onsubmit' => 'event.preventDefault(); return false;')) !!}
             

        			<div class="form-group">
        				{!! Form::label('email', 'E-MAIL',array('class'=>'required')); !!}
        	            {!! Form::email('email',null,array('required' => 'required','class'=>'form-control','id'=>'email','name'=>'email')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('password', 'PASSWORD',array('class'=>'required')); !!}
						{!! Form::text('password',null,array('required' => 'required','class'=>'form-control','id'=>'password','name'=>'password','minlength' => '8')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('confirm-password', 'CONFIRM PASSWORD',array('class'=>'required')); !!}
						{!! Form::text('confirm-password',null,array('required' => 'required','class'=>'form-control','id'=>'confirm-password','name'=>'confirm_password','minlength' => '8')) !!}
					</div>
					<button type="submit" class="btn common pink-btn">SIGN UP WITH EMAIL</button>
					
					<button type="submit" class="btn common blue">SIGN UP WITH FACEBOOK</button>
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