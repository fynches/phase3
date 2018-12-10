<div class="modal" id="gift_Add" tabindex="-1" role="dialog">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#gift_Add').hide();">
          <span aria-hidden="true">&times;</span>
        </button>
         
         <h5>ADD A CUSTOM EXPERIENCE</h5>
         
         <div class="row" id="add_form">
             <div class="col-md-6">
                 <img src="http://fynches.codeandsilver.com/public/front/img/upload.png" style="width:100%">
             </div>
             <div class="col-md-6">
                 <label>Enter URL of Experience</label>
                 <input type="text" class="form-control" placeholder="https://www.example-url.com/">
                 
                 <label>Experience Title</label>
                 <input type="text" class="form-control">
                 
                 <label>Experience Description</label>
                 <textarea name="message" class="form-control" id="text_area"></textarea>
                 
                 <div class="row" id="gift_amount">
                     <div class="col-md-6">
                        <button class="btn btn-primary yellow_submit">ADD TO GIFTS</button>
                     </div>
                     <div class="col-md-6">
                         <p>GIFT AMOUNT <i class="fas fa-info-circle"></i></p>
                        <input type="text" class="form-control">
                     </div>
                 </div>
                 
             </div>
         </div>
         
      <div class="modal-footer" style="border-top: 0px solid #e5e5e5;">
      </div>
    </div>
  </div>
</div>
</div>
