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
          
            <div class="col-md-8 col-md-offset-2" style="margin-left: 180px;">
            <div class="panel panel-success">
                <div style='font-size:120%;' class="panel-heading">New Post</div>
                

                <div class="panel-body">
               
                  <form class="form-horizontal" role="form" method="POST" action="/newpost" enctype="multipart/form-data">
                   {{ csrf_field() }}

                                    <input type="hidden" name="nuserid" value="'.$user->id.'" />
                                    
                                            
                                  
                                    <h4>Title</h4>
                                    <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <input class="form-control" name="ntitle"/>
                                        </div>
                                    </div>
                                    
                                    <div class="text-area" >
                                        <h4>Content</h4>
                                        <textarea style="border:solid 1px orange;" name="content" rows="10"></textarea>
                                        
                                    </div>
                                    <label>Select image to upload:</label>
                                    <input type="file" name="file" id="file">
                                    <button class="btn btn-primary"  type="submit" name="cmt" id="cmt" >Post</button>
                                </form>
                               
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection