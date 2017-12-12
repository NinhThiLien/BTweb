@extends('layouts.layout')
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
@section('content') 
<section id="advertisement">
    {{-- <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div> --}}
</section>

<section>
    
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                
            </div>
            </div>
            <div class="col-md-8 col-md-offset-2"  style="margin-left: 180px;">
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 120%;">Programs trained by coach 
                <span style="color: green;">
                <?php
                     echo $user1->name;
                ?> 

                </div>
                </span>
                <div class="panel-body" style="margin-left: 20px;">
                <?php 
                    foreach ($progs1 as $key => $object) {
                        
                        echo "<p><a href='/blog/".$object->url."'>".$object->title."</a></p>";
                        
                    }
                ?>            

                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection