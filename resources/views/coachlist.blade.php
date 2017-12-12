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
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                
            </div>
            </div>
            <div class="col-md-6 col-md-offset-2"  style="margin-left: 280px;">
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 120%;">Coach List</div>

                <div class="panel-body" style="margin-left: 20px;">
                <?php 
                    foreach ($coachs as $key => $object) {
                        $coach = $object->name;
                        $id = $object->id;
                        
                        echo "<p style='font-size: 110%;'><a href='/coach/".$object->id."'>".$object->name."</a></p>";
                        
                    }
                ?>            

                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection