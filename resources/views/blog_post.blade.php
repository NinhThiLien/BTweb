@extends('layouts.layout')

@section('content') 

<div class="col-sm-9" id="blog-post">


                    <div class="box">

                        <h1>{{$title}}</h1>
                        <?php 
                                    $owner = DB::table('users')->where('id', $prog->idowner)->first();
                                ?>
                        <p class="author-date">By <a href="#">{{$owner->name}}</a> |  <i class="fa fa-clock-o"></i> {{date('h:i:s A', strtotime($prog->created_at))}} |  <i class="fa fa-calendar"></i>  {{date('d M, Y', strtotime($prog->created_at))}}  </p>
                        <div id="post-content">

                            <?php
                             
                             if (isset($prog->image)) echo '
                                <p>
                                    <img src="/images/blog/'.$prog->image.'" class="img-responsive" alt="Example blog post alt">
                                </p>';
                            ?>

                            <?php
                                if ($prog->level==1) echo "<h2>Program Level: Nhẹ</h2>";
                                else if ($prog->level==2) echo "<h2>Program Level: Trung bình</h2>";
                                else if ($prog->level==3) echo "<h2>Program Level: Nặng</h2>";
                                echo $prog->content;
                                echo "<br>";
                        ?>
                        <?php
                            if ((isset($user->id) && ($user->customer==1))){
                                $yes = DB::table('participate')->where('userid', $user->id)->where('prgid', $prog->id)->first();
                            }
                                
                        ?>
                        @if (count($action_date))
                        @foreach ($action_date as $date)
                           
                            <?php
                                $ngay = $date->date;
                                echo "<p style='font-size:130%;'>"."Ngày ".$ngay.": "."</p>";
                                $actions = DB::table('batchs')->select('actid', 'start', 'end')->where('date', $ngay)->where('prgid', $prog->id)->get();
                                
                                foreach ($actions as $key => $object) {
                                    echo "<span style='margin-left:50px;'>".$object->start." - ".$object->end.": "."</span>";
                                    $action = DB::table('actions')->select('name', 'content')->where('actid', $object->actid)->first();
                                     if (isset($yes)) echo '<input type="checkbox" name="check" id="check" value="1"> ';
                                    echo $action->name;
                                   
                                    echo "<br>";

                                }
                                 echo "<br>";
                                
                                
                            ?>
                        @endforeach
                        @endif
                        <br><br>
                        <form class="form-horizontal" name="reg" id="reg" role="form" method="POST" action="/postregis">
                                {{ csrf_field() }}
                                <input type="hidden" name="nuserid" value="<?php if (isset($user->id)) echo $user->id; ?>" />
                                <input type="hidden" name="nprogid" value="{{$prog->id}}" />
                        <?php
                            if ((isset($user->id) && ($user->customer==1))){
                                $yes = DB::table('participate')->where('userid', $user->id)->where('prgid', $prog->id)->first();
                                
                                    if ($prog->coachid != 1)
                                    if (is_null($yes))
                                    echo '<button type="submit" class="btn btn-primary" id="join1" name="join1">
                                            <i class="fa fa-btn fa-user"></i> Start
                                        </button>';
                                    else echo '<button type="submit" class="btn btn-success" id="join2" name="join2">
                                        <i class="fa fa-btn fa-user"></i> Joined
                                    </button>';

                            }
                       ?>
                       <?php 
                           date_default_timezone_set('Asia/Ho_Chi_Minh');
                           if (isset($yes)){
                                echo '<span style="font-size: 120%;">  You joined this program at </span>'.$yes->created_at.'<span style="font-size: 120%;">. You have practiced for </span>';
                                $date = date('Y-m-d H:i:s');
                                $ngay = floor((strtotime($date) - strtotime($yes->created_at))/86400);
                                $du1 = ((strtotime($date) - strtotime($yes->created_at))%86400);
                                $gio = floor($du1/3600);
                                $du2 = round((strtotime($date) - strtotime($yes->created_at))%3600);
                                $phut = floor($du2/60);
                                
                                echo '<span style="font-size: 120%; color:red;">'.$ngay.'d '.$gio.'h '.$phut.'m </span>';
                            }
                       ?>
                         </form>
                         <form class="form-horizontal" name="flike1" id="flike1" role="form" method="POST" action="/postlike1">
                                {{ csrf_field() }}
                                <input type="hidden" name="nuserid" value="<?php if (isset($user->id)) echo $user->id; ?>" />
                                <input type="hidden" name="nprogid" value="{{$prog->id}}" />
                                <?php
                                $countlike1=DB::table('likes')->where('idprg', $prog->id)->count();
                          
                                if (isset($user)) {
                                    $liked = DB::table('likes')->where('iduser', $user->id)->where('idprg', $prog->id)->first();
                                
                                
                            
                                    if (is_null($liked))
                                        echo '<button type="submit"  action="blog_post" class="btn btn-default" id="like1" name="like1" value="click">'.$countlike1.'
                                        <i class="fa fa-thumbs-o-up"></i>
                                            </button>';
                                        else echo '<button type="submit"  action="blog_post" class="btn btn-success" id="unlike1" name="unlike1" value="click">'.$countlike1.'
                                        <i class="fa fa-thumbs-o-up"></i>
                                            </button>';
                                } else echo '<button type="submit"  action="blog_post" class="btn btn-default" id="like1" name="like1" disabled>'.$countlike1.'
                                    <i class="fa fa-thumbs-o-up"></i>
                                        </button>';
                           
                       ?>


                        
                        </form>
                        <div class="pager-area">
                            <ul class="pager pull-right">
                                {{-- <li><a href="{{$data['previous_url']}}">Pre</a></li> --}}
                                <li><a href="{{$prev_url}}">Pre</a></li>
                                {{-- <li><a href="{{$data['next_url']}}">Next</a></li> --}}
                                <li><a href="{{$next_url}}">Next</a></li>
                            </ul>
                        </div>
                            

                        <div id="comments" data-animate="fadeInUp">

                            <h2>Comments   </h2>
                    
                    <ul class="media-list">
                    <?php
                        $comments = DB::table('comments')->where('idprog', $prog->id)->get();
                        if (isset($comments)){
                            foreach ($comments as $key => $object) {
                                $usercmt = DB::table('users')->select('name')->where('id', $object->iduser)->first();
                                $idcmt = $object->id;
                                $liked2=0;
                                $url = url('blog/'.$prog->url);
                                if (isset($user)){ $liked2 = DB::table('likes')->where('iduser', $user->id)->where('idcmt', $idcmt)->first();}
                                 $countlike=DB::table('likes')->where('idcmt', $idcmt)->count();
                                if (isset($usercmt)) {
                                    echo '<form class="form-horizontal" name="flike2" id="flike2" role="form" method="POST" action="/postlike2">
                                ';
                                echo csrf_field();
                                if (isset($user)) echo '<input type="hidden" name="nuserid" value="'.$user->id.'" />';
                                echo'
                                    <input type="hidden" name="ncmtid" value="'.$idcmt.'" />

                                    <div class="row comment">
                                <div class="col-sm-9 col-md-10">
                                    <h5>'.$usercmt->name.'</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i>'.$object->created_at.'</p>
                                    <p>'.$object->content.'</p>

                                   
                                </div>
                            </div>





                                    
                                        <div class="media-body">';
                                            if (isset($user)){
                                                if ((is_null($liked2))){
                                                
                                                echo '<button type="submit"  action="blog_post" class="btn btn-default" id="like2" name="like2" value="click">'.$countlike.'
                                                <i class="fa fa-thumbs-o-up"></i></button>';
                                                } else echo '<button type="submit"  action="blog_post" class="btn btn-success" id="unlike2" name="unlike2" value="click">'.$countlike.'
                                                <i class="fa fa-thumbs-o-up"></i>
                                                </button>';
                                            } else
                                            
                                                 echo '<button type="submit"  action="blog_post" class="btn btn-default" id="like2" name="like2" disabled>'.$countlike.'
                                                <i class="fa fa-thumbs-o-up"></i></button>';
                                               
                                            
                                            echo '
                                        </div>
                                    </form>
                                    <hr>
                                    ';
                                }
                            }
                        }
                    ?>
                    
                    
                        
                    </ul> 
                        </div>
                        <!-- /#comments -->

                        <div id="comment-form" data-animate="fadeInUp">

                            <h4>Leave comment</h4>

                            <?php 
                             $url = url('blog/'.$prog->url);
                            if (isset($user)){
                            echo '<form class="form-horizontal" role="form" method="POST" action="/postcmt">'.csrf_field().'

                                    <input type="hidden" name="nuserid" value="'.$user->id.'" />
                                    <input type="hidden" name="nprogid" value="'.$prog->id.'" />
                                            
                                    <h2>Leave a Comment    </h2>
                                    <div class="text-area">
                                        <div class="form-group">
                                            <label for="comment">Comment <span class="required">*</span>
                                            </label>
                                            <textarea class="form-control" id="comment"name="content" rows="11"></textarea>
                                        </div>
                                        <button class="btn btn-primary"  type="submit" name="cmt" id="cmt" >Post Comment</button>
                                    </div>
                                </form>';
                            }
                        ?>

                        </div>
                        <!-- /#comment-form -->

                    </div>
                    <!-- /.box -->
                </div>
</div>
<div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <?php 
                        if ($coach->id != 1) echo '
                            <div class="panel-heading">
                                <h3 class="panel-title">Coach Information</h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="blog.html">Name: '.$coach->name.' </a>
                                </li>
                                <li>
                                    <a href="blog.html">Email: '.$coach->email.' </a>
                                </li>
                            </ul>
                        </div>
                        '; else
                            echo '<div class="panel-heading">
                                <h3 class="panel-title">Persion post</h3>
                            </div>';
                        ?>

                        

                    </div>
                </div>
<section>
    
  <script type="text/javascript">
(function($){
window.onbeforeunload = function(e){    
window.name += ' [' + $(window).scrollTop().toString() + '[' + $(window).scrollLeft().toString();
};
$.maintainscroll = function() {
if(window.name.indexOf('[') > 0)
{
var parts = window.name.split('['); 
window.name = $.trim(parts[0]);
window.scrollTo(parseInt(parts[parts.length - 1]), parseInt(parts[parts.length - 2]));
}   
};  
$.maintainscroll();
})(jQuery);
 </script>
</section>

@endsection