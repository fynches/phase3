<form id="hostChild" onsubmit="event.preventDefault();">
    <div class="container">
        <div class="row form-section">
            <div class="col-md-12">
                <h2 class="text-center" style="font-weight:bold">LET'S GET STARTED SETTING UP YOUR GIFT PAGE</h2>
            </div>
        </div>
        <div class="row" id ="rw">
            
            <div class="col-md-6">
                <h5 style="font-family:'Futura-Medium';font-weight:bold; font-size:16px">Party Host Info</h5><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="fname" class="required">FIRST NAME</label>
                      <input required type="text" maxlength="20" class="form-control" id="host_fname" value="">
                    </div>
                 </div>
                 <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="lname" class="required">LAST NAME</label><a  href="#" data-toggle="tooltip" title="Insert Tooltip Here!" style="color:black;"> &nbsp&nbsp<i class="fas fa-info-circle"></i></a>
                      <input required type="text" maxlength="30" class="form-control" id="host_lname" value="">
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <h5 style="font-family:'Futura-Medium';font-weight:bold; font-size:16px;margin-bottom:20px" >Child Info  <a  href="#" data-toggle="tooltip" title="Insert Tooltip Here!" style="color:black;">&nbsp&nbsp<i class="fas fa-info-circle"></i></a></h5>
                <div class="row">
                <form class="form-inline">
                    <div class="form-row">
                      <div id="name" class="form-group col-md-4" data-child="">
                        <label for="cfname" class="required">FIRST NAME</label>
                        <input required type="text" maxlength="20" class="form-control" id="child_fname" value="" >
                      </div>
                      <div class="form-group col-md-5">
                        <label for="age" class="required">AGE</label>
                        <input required type="text" maxlength="3" class="form-control" id="child_age" value="" pattern="\d{1,3}">
                      </div>
                      </div>
                    </form>
                </div>
                <div class="row" id="drag" >
                    <p>ADD A PHOTO OF GIFT RECIPIENT <a  href="#" data-toggle="tooltip" title="Insert Tooltip Here!" style="color:black;">&nbsp&nbsp<i class="fas fa-info-circle"></i></a></p>
                        <form id="photo-form" action="upload.php" method="POST">
                      <input id="upphoto" type="file" onchange="readURL(this);">
                      
                      
                      <p>Drag and Drop or <a href="#">Browse</a> your files</p>
                      
                    </form>
                    <div id="pictures"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <input id="hostchild-submit" type="submit" class="yellow-submit pointer" value="NEXT STEP">
            </div>
        </div>
        
    </div>
</form>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            input.files[0].value = null;
            $( '#picture' ).remove();
                var image = '<img id="picture" src="#" style="padding:20px"/>';
                $( '#pictures' ).append(image);
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#picture')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };
    
                reader.readAsDataURL(input.files[0]);
            }
    }
</script>