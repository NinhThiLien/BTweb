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
                <div class="left-sidebar">
                    <h2>
                    <?php
                            if ($level==1) echo "Program Level: Nhẹ";
                            else if ($level==2) echo "Program Level: Trung Bình";
                            else if ($level==3) echo "Program Level: Nặng";
                        ?>
                    
                </h2>
                <div style="font-size:110%; color:green; margin-left:20px;">
                    <p>Age: {{ $age }}</p>
                    <p>Weight: {{ $weight }}</p>
                    <p>Height: {{ $height }}</p>
                </div>
            </div>
            </div>
            <div class="col-md-7 col-md-offset-2" style="margin-left: 80px;">
            <div class="panel panel-success">
                <div style='font-size:120%;' class="panel-heading">Bạn phù hợp với các bài tập sau: </div>
                

                <div class="panel-body">
                {!! csrf_field() !!}
                    <?php
                            
                            
                            foreach ($progs as $key => $object) {
                                 $url = intval($object->url);

                                 echo "<p><a href='/blog/".$url."'>".$object->title."</a></p>";
                            }
                            
                            
                            
                        ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection