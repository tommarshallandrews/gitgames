
@include('masters.unregistered')


<script>




$(document).ready(function(){
$('#username').keyup(username_check);
$('#ok').hide();
$('#short').hide();
$('#taken').hide();
});
    
function username_check(){  
var username = $('#username').val();
if(username == "" || username.length < 4){
$('#username').css('border', '10px #CCC solid');
$('#short').fadeIn();
$('#ok').hide();

}else{

$('#short').hide();
jQuery.ajax({
   type: "POST",
   url: "/rock/public/usernameCheck",
   data: 'username='+ username,
   cache: false,
   success: function(response){
    
if(response == 1){
    $('#username').css('border', '3px #C33 solid'); 
    $('#ok').hide();
    $('#taken').fadeIn();
    }else{
    $('#username').css('border', '3px #090 solid');
    $('#taken').hide();
    $('#ok').fadeIn();
         }

}
});
}







}

</script>



 <div id="signupbox" style="display; margin-top:50px" class="mainbox col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">Please register to save your creations.</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >

                              {{ Form::open(array('url'=>'users/create', 'class'=>'form-horizontal', 'id'=>'signupform', 'role'=>'form')) }}
                                
                                @if(Session::has('errors'))
                                <div id="signupalert" style="display" class="alert alert-danger">
                                  <strong>Please correct the following errors: </strong>
                                      <ul>
                                          @foreach($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                </div>
                                @endif   
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="email" placeholder="Your email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">Public name</label>
                                    <div class="col-md-7">

                                        <input type="text" class="form-control" id="username" name="username" placeholder="Other users will see this by any public creations">
                                    </div>
                                       <div class="col-md-2">
                                    <span id="short"class="glyphicon glyphicon-remove large"> Too short</span>
                                    <span id="taken"class="glyphicon glyphicon-remove large"> Taken</span>
                                     <span id="ok"class="glyphicon glyphicon-ok large"> OK</span>
                                    </div>
                                </div>
  
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-7">
                                       <input type="password" class="form-control" name="password" placeholder="Choose a password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-7">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                    </div>
                                </div>
                              
                                
                                
                                
                            {{ Form::close() }}
                         </div>
                    </div>

               
               
                
         </div> 

 @include('masters.footerNoMenu')