@extends('layouts.layout')
<head>
<style>
    label {
        color: #2ecc71;
           }
</style>
</head>
@section('content') 
<section id="advertisement">
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    
                    <div style="font-size:110%;">
                        <?php

                            if ((Auth::user()->customer==1)){
                            echo "<h2>Joined Programs</h2>";
                                foreach ($progs as $key => $object) {
                                    $prog = DB::table('programs')->select('url', 'title', 'content')->where('id', $object->prgid)->first();
                                    $url = intval($prog->url);
                                    echo "<p><a href='/blog/".$url."'>".$prog->title."</a></p>";
                                }
                            } else echo "<h2>Only Available For Customer</h2>";
                            
                            
                        ?>
                </div>
            </div>
            </div>
            <div class="col-md-8 col-md-offset-2" style="margin-left: 80px;">
                <div class="panel panel-success">
                    <div class="panel-heading">Edit Profile</div>

                    <div class="panel-body">
                        <form action="update" class="form-horizontal" role="form"  method="POST">
            <input type="hidden"  name="_token" value="{{csrf_token()}}" />
            <div class="form-group">
                <label class="col-md-4 control-label" style="padding-left: 150px; padding-top: 7px;">Name</label>
                <div class="col-md-6">
                    <input class="form-control" name="name" value="{{$user->name}}" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" style="padding-left: 150px; padding-top: 7px;">Email</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder=""
                value="{{$user->email}}" readonly=""/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" style="padding-left: 150px; padding-top: 7px;">User Name</label>
                <div class="col-md-6">
                    <input class="form-control" name="username"
                value="{{$user->username}}" readonly="" />
                </div>
            </div>
           
            <div class="form-group">
                <label class="col-md-4 control-label" style="padding-left: 150px; padding-top: 7px;">Birth Day</label>
                <div class="col-md-6">
                <input class="form-control" name="birthday" type="date" 
                value="{{$user->bday}}" />
                </div>
            </div>
           <div class="form-group">
                <label class="col-md-4 control-label" style="padding-left: 150px; padding-top: 7px;">Adress</label>
                <div class="col-md-6">
                <input class="form-control" name="address" 
                value="{{$user->adress}}" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" style="padding-left: 150px; padding-top: 7px;">Weight</label>
                <div class="col-md-6">
                <input class="form-control" type="number" step="any" name="weight" 
                value="{{$user->weight}}" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" style="padding-left: 150px; padding-top: 7px;">Job</label>
                <div class="col-md-6">
                <input class="form-control" name="job" 
                value="{{$user->job}}" />
                </div>
            </div>
            <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            <button type="submit" " class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-warning"> Reset </button>
            </div>
        </form>
                        
                    </div>
                </div>
            </div>
            
        </div>
    
    </div>
</section>
@endsection