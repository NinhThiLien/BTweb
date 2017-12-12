@extends('layouts.layout')
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
@section('content')       

    <?php
    if(isset($_POST['submit1'])){

       
          echo "<script type=\"text/javascript\">".
        "alert('Invalid Email Adress or Password!!!');".
        "</script>";
        
    } 
     $value = Session::get('message');
     if (isset($value)){
        echo "<script type=\"text/javascript\">".
        "alert('Registation Sucess');".
        "</script>";
     }
?>    
 
       <section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="login-form"><!--login form-->
                            <h2>Login to your account</h2>
                            <form method="POST" action="{{url('auth/login')}}">
                                {!! csrf_field() !!}
                                <input type="email" name="email" id="email" placeholder="Email Address" />
                                <input type="password" name="password" id="password" placeholder="Password" />
                                <span>
                                    <input name="remember" id="remember" type="checkbox" class="checkbox"> 
                                    Keep me signed in
                                </span>
                                <button type="submit" name="submit1" class="btn btn-default">Login</button>
                            </form>
                        </div><!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">OR</h2>
                    </div>
                    <div class="col-sm-5 ">
                        <div class="signup-form"><!--sign up form-->
                            <h2>New User Signup!</h2>
                            <form method="POST" action="{{url('register')}}">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="name" class="control-label"></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name *" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label"></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email *" data-error="Bruh, that email address is invalid" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="control-label"></label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="User Name *" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label"></label>
                                    
                                      <div class="form-group">
                                        <input pattern=".{6,}" type="password" data-minlength="6" class="form-control" id="password" name="password" placeholder="Password *" required>
                                        {{-- <div class="help-block">Minimum of 6 characters</div> --}}
                                      </div>
                                      <div class="form-group">
                                        <input type="password" class="form-control" id="passwordconfirm" data-match="#password" data-match-error="Whoops, these don't match" placeholder="Confirm Password *" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    
                                </div>
                               
                                
                                <input type="date" name="bday" id="bday"  placeholder="Birth Day"/>
                                <input type="text" name="adress" id="adress"  placeholder="Adress"/>
                               <div class="form-group">
                                    <label for="weight" class="control-label"></label>
                                    <input type="number" step="any" class="form-control" id="weight" name="weight" placeholder="Weight (kg)">
                                </div>
                                <input type="text" name="job" id="job"  placeholder="Job"/>
                                <div class="form-group">

                                    <div class="checkbox">
                                      
                                      <input type="hidden" name="customer" value="0" />

                                        <input type="checkbox" name="customer" id="customer" value="1" style="height:100%; margin-top: 0px;">
                                        <span style="margin-left: 100px;">Customer</span>
                                      
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="checkbox">
                                      
                                      <input type="hidden" name="coach" value="0" />

                                        <input type="checkbox" name="coach" id="coach" value="1" style="height:100%; margin-top: 0px;">
                                        <span style="margin-left: 100px;">Coach</span>
                                      
                                    </div>
                                </div>
                               
                                <button type="submit" name="submit2" class="btn btn-default" id="SignBtn">Signup</button>

                            </form>
                        </div><!--/sign up form-->
                    </div>
                </div>
            </div>
           <script type="text/javascript">
     
           
               document.getElementById("SignBtn").onclick = function() {
                    
                    // var x = document.getElementById("coach").value;
                    // var y = document.getElementById("customer").value;
                    // if (x==0 && y==0){
                    //     alert("You must check at least one Type's checkbox.");
                    //     return false;
                    // }
                    checked = $("input[type=checkbox]:checked").length;
                    if(!checked) {
                        alert("You must check at least one Type's checkbox.");
                        return false;
                    }
                };
            
        </script> 
        </section><!--/form-->
@endsection