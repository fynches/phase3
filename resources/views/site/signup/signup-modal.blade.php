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
        	   <form id="signupForm" class="form-horizontal" method="POST" onsubmit="event.preventDefault();">
        			<div class="form-group">
        			    <label for="email" class="required">EMAIL</label>
        				<input required type="email" id="signup-email" name="email" class="form-control required">
					</div>
					<div class="form-group">
					    <label for="password" class="required">PASSWORD</label>
        				<input required type="password" id="signup-password" name="password" class="form-control required" minlength=8>
					</div>
					<div class="form-group">
					    <label for="email" class="required">CONFIRM PASSWORD</label>
        				<input required type="password" id="confirm-password" name="confirm-password" class="form-control required" minlength=8>
					</div>
					<button type="submit" class="btn common pink-btn">SIGN UP WITH EMAIL</button>
					
					<button type="submit" class="btn common blue">SIGN UP WITH FACEBOOK</button>
        		 </form>
        		 
        		<div class="terms-conditions">
            	    <div>By creating your Fynches account you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></div>
            	    <div>Have an account? <a href="#" id="sig_up" data-toggle="modal" data-target="#largeModalSI">Sign In</a></div>
        	    </div>
						 <div id="signupSuccessMessage"></div>
						 <div id="signupErrorMessage"></div> 
        	</div>					
        </div>
      </div>
    </div>
  </div>
</div>