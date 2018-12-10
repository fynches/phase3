<form id="dateLocation" onsubmit="event.preventDefault();">
    <div class="container">
        <div class="row form-section">
            <div class="col-md-12">
                <h2 class="text-center" style="font-weight:bold">WHAT IS THE DATE AND LOCATION OF YOUR PARTY</h2>
            </div>
        </div>
        <div class="row"  id="rw1">
            
            <div class="col-md-6">
                <h5>Date Info</h5>
                 <label style="margin-bottom:10px;" class="required">CALENDER DATE</label><br>
                <div class="form-row show-inputbtns">
                   
                    <input required id="party-time" value="@if($user->event){{$user->event->event_publish_date}}@endif" type="date" data-date-inline-picker="false" class="form-control" data-date-open-on-focus="true" />
                </div>
                
                <div class="pretty p-icon p-curve p-has-indeterminate">
        <input type="checkbox" id="not-decided" value="1" @isset($user->event->not_decided) @if($user->event->not_decided == 1) {{'checked'}} @endif @endisset/>
        <div class="state">
            <i class="icon mdi mdi-check"></i>
            <label>We Are Still Deciding On The Date</label>
        </div>
        <div class="state p-is-indeterminate">
            <i class="icon mdi mdi-minus"></i>
            <label>Indeterminate</label>
        </div>
    </div>
            </div>
            <div class="col-md-6">
                <h5>Location Info</h5>
                <div class="form-row">
                    <div class="form-group col-md-6 " id="zip">
                      <label for="zipcode" style="margin-bottom:10px;" class="required">ZIP CODE </label>&nbsp&nbsp<a  href="#" data-toggle="tooltip" title="Insert Tooltip Here!" style="color:black;"><i class="fas fa-info-circle"></i></a>
                      <input required type="text" class="form-control" id="zipcode" value="@if($user->event){{$user->event->zipcode}}@endif">
                    </div>
                  </div>
            </div>  
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <input id="date-location" type="submit" class="yellow-submit pointer" value="NEXT STEP">
            </div>
        </div>
        
    </div>
</form>