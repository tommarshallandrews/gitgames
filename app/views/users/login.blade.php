

 @include('masters.header') 



 <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-default" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 90%; position: relative; top:-10px"><a href="{{ url('/password/remind') }}"></a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

@if(Session::has('message'))
                        <div style="display" id="login-alert" class="alert alert-danger col-sm-12">{{ Session::get('message') }}</div>
@endif   
                            
                       {{ Form::open(array('url'=>'users/signin', 'class'=>'form-horizontal')) }}
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
 


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                     {{ Form::submit('Login', array('class'=>'btn btn-success btn-lg"'))}}
             

                                    </div>
                                </div>


      
                           {{ Form::close() }}   



                        </div>                     
                    </div>  
        </div>


 @include('masters.footerNoMenu') 