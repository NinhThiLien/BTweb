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
   {{--  <script type="text/javascript">
        
        $(document).ready(function () {
            $('#SubBtn').click(function() {
                var age = $.trim($('#age').val());
                var height = $.trim($('#height').val());
                var weight = $.trim($('#weight').val());
                var level = 2;
                if (age>50) level = 1;
                if (age<=40 && (weight>(height-90))) level = 3;
                
            });
        });
    </script>  --}}
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
            <div class="col-md-7 col-md-offset-2" style="margin-left: 80px;">
            <div class="panel panel-success">
                <div class="panel-heading">Tutorial - Help user to choose Programs</div>

                <div class="panel-body">
                     <form class="form-horizontal" role="form" method="GET" action="{{ url('tutorial') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="age" class="col-md-4 control-label">Age</label>
                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" value="" required autofocus>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="height" class="col-md-4 control-label">Height</label>
                            <div class="col-md-6">
                                <input id="height" type="number" step="0.01" class="form-control" placeholder="cm" name="height" value="" required autofocus>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="weight" class="col-md-4 control-label" >Weight</label>
                            <div class="col-md-6">
                                <input id="weight" type="number" step="0.01" class="form-control" placeholder="kg" name="weight" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success" id="SubBtn">
                                    Xác nhận
                                </button>

                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection