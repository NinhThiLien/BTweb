@extends('layouts.layout')
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


 <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

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
                               
                                <button type="submit" name="submit2" class="btn btn-primary" id="SignBtn">Signup</button>

                            </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>
                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>

                        <hr>

                        <form method="POST" action="{{url('auth/login')}}">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" />
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <span>
                                    <input name="remember" id="remember" type="checkbox" class="checkbox"> 
                                    Keep me signed in
                                </span>
                            </div>
                                <button type="submit" name="submit1" class="btn btn-primary">Login</button>
                            </form>
                        
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>



 
       <section id="form"><!--form-->
            
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