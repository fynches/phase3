<div class="modal" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#myModal').hide();">
          <span aria-hidden="true">&times;</span>
        </button>
          <div class="col-md-6">
            <ul id="lightSlider" style="width:100%!important;height:100%;">
              <li data-thumb="{{ asset('public/front/img/reco_1.png') }}" style="width:100%!important;">
                  <img src="{{ asset('public/front/img/reco_1.png') }}" width="100%" alt="picture"/>
              </li>
              <li data-thumb="{{ asset('public/front/img/reco_2.png') }}">
                  <img src="{{ asset('public/front/img/reco_2.png') }}" width="100%" alt="picture"/>
              </li>
              <li data-thumb="{{ asset('public/front/img/reco_3.png') }}">
                  <img src="{{ asset('public/front/img/reco_3.png') }}" width="100%" alt="picture"/>
              </li>
              <li data-thumb="{{ asset('public/front/img/reco_4.png') }}">
                  <img src="{{ asset('public/front/img/reco_4.png') }}"  width="100%" alt="picture"/>
              </li>
            </ul>
        </div>
        
        
        
        
        <div class="col-md-6">
            <h1 id="hdgift">One Month Youth Membership</h1>
            <h4><strong>AGES</strong> 13 - 17</h4>
            <div class="col-md-6" style="padding-left:0">
                <h4><a id="gifts">GIFT DESCRIPTION</a></h4>
            </div>
            <div class="col-md-6">
                <h4><a id="business">BUSINESS INFO</a></h4>
            </div>
         
                
            <div id="gift_descrip">
                <p>
                    <strong>Description</strong><br>
                    A one month monthly membership to Mission Cliffs Climbing. Mission Cliffs youth climbing membership offers kids a chance
                    to build climbing skills, make friends, and have a blast!
                    <br><br>
                    help your child learn the fundamentals of climbing, including belaying, knot craft, basic climbing technique, bouldering, and more.
                </p>
          
                <p>
                    <Strong>Details</Strong><br>
                    $119.99: 2 weeks of delivery<br>
                    $239.99: 4 weeks of delivery<br>
                    $359.99: 6 weeks of delivery<br>
                </p>
            </div>
            
            
             <div id="bus_descrip" style="display:none">
                <p>
                    <strong>Business Info</strong><br>
                    A one month monthly membership to Mission Cliffs Climbing. Mission Cliffs youth climbing membership offers kids a chance
                    to build climbing skills, make friends, and have a blast!
                    <br><br>
                    help your child learn the fundamentals of climbing, including belaying, knot craft, basic climbing technique, bouldering, and more.
                </p>
          
                <p>
                    <Strong>Details</Strong><br>
                    $119.99: 2 weeks of delivery<br>
                    $239.99: 4 weeks of delivery<br>
                    $359.99: 6 weeks of delivery<br>
                </p>
            </div>
            
            
            
        <div class="col-md-6">
            <div class="row">
                <button class="btn btn-primary yellow_submit" id="add-to-gifts">ADD TO GIFTS</button>
                
            </div>
        </div>
        <div class="col-md-6">
            <center><label for="fidt-amount">GIFT AMOUNT</label>&nbsp&nbsp&nbsp&nbsp<a href ="" data-toggle="tooltip" data-placement="top" title="You will receive 
            the cash equivalent of this gift amount when the gift is purchased from your gift page."><i class="fas fa-info-circle" style="color:black;"></i></a></center>
            <div class="row input-group">
                <span class="input-group-addon" style="padding-bottom:4px;">$</span>
                <input id="gift-amount" type="text">
            </div>
        </div>
      </div>
      <div class="modal-footer" style="border-top: 0px solid #e5e5e5;">
      </div>
    </div>
  </div>
</div>
</div>

<style>
    .tooltip-inner {
      background-color: #F2F2F2 !important;
      color: black !important;
}

.tooltip.top .tooltip-arrow {
  border-top-color: #F2F2F2 !important;
}

</style>