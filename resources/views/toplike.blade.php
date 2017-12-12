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
                   
                    
                </h2>
               
            </div>
            </div>
            <div class="col-md-7 col-md-offset-2" style="margin-left: 80px;">
            <div class="panel panel-success">
                <div style='font-size:120%;' class="panel-heading">Top Like Programs: </div>
                

                <div class="panel-body">
                {!! csrf_field() !!}
                    <?php
                            
                            
                            foreach ($top as $key => $object) {
                                $prog = DB::table('programs')->where('id', $object->idprg)->first();
                                if (isset($prog))
                                 echo "<p><a href='/blog/".$object->idprg."'>".$prog->title."</a> - ".$object->count." likes</p>";
                            }
                            
                            
                            
                        ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection