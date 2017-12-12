@extends('layouts.layout')
<head>
<script src="/js/jquery.cookie.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<style>
.content{
    font-color:blue;
    font-size: 110%;
}
.actname{
    font-color:blue;
    font-size: 140%;
}
.actcont{
    font-size:100%;
    margin-left:20px;
}
</style>
</head>
@section('content')   
<section id="advertisement">
    <div class="container">
        {{-- <img src="images/shop/advertisement.jpg" alt="" /> --}}
    </div>
</section>

<section>
    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @include('shared.sidebar')
                    
                    <?php 
                        if ($coach->id != 1) echo '
                        <h2>Coach Information</h2>
                    <p class="content">Coach Name: <a href="/coach/'.$coach->id.'">'.$coach->name.'</a></p>
                    <p class="content">Email: '.$coach->email.'</p> 
                    '; else
                    echo "<h2>Personal Post</h2>";
                    ?>
                    
                </div>
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Latest From our Blog</h2>
                    <div class="single-blog-post">
                        {{-- <h3>{{$data['post']['title']}}</h3> --}}
                        <h3>{{$title}}</h3>
                        
                        <div class="post-meta">
                            <ul>
                                <?php 
                                    $owner = DB::table('users')->where('id', $prog->idowner)->first();
                                ?>
                                <li><i class="fa fa-user"></i>{{$owner->name}}</li>
                            
                                {{-- <li><i class="fa fa-clock-o"></i> {{date('h:i:s A', strtotime($data['post']['created_at']))}}</li> --}}
                                <li><i class="fa fa-clock-o"></i> {{date('h:i:s A', strtotime($prog->created_at))}}</li>
                                {{-- <li><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($data['post']['created_at']))}}</li> --}}
                                <li><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($prog->created_at))}}</li>
                            </ul>
                        </div>
                        <a href="">
                            {{-- <img src="{{asset('images/blog/'.$data['post']['image'])}}" alt=""> --}}
                            <?php
                             
                             if (isset($prog->image)) echo '<img src="/images/blog/'.$prog->image.'" alt="">';
                            ?>
                        </a>


                        <?php
                                if ($prog->level==1) echo "<p style='color:green; font-size:150%;'>"."Program Level: Nhẹ"."</p>";
                                else if ($prog->level==2) echo "<p style='color:green; font-size:150%;'>"."Program Level: Trung Bình"."</p>";
                                else if ($prog->level==3) echo "<p style='color:green; font-size:150%;'>"."Program Level: Nặng"."</p>";
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
                    </div>
                </div><!--/blog-post-area-->

               

                <div class="response-area">
                    {{-- <h2>3 RESPONSES</h2> --}}
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
                                    <li class="media">

                                    
                                        <div class="media-body">
                                            <ul class="sinlge-post-meta">
                                                <li><i class="fa fa-user"></i>'.$usercmt->name.'</li>
                                                <li><i class="fa fa-clock-o"></i>'.$object->created_at.'</li>
                                                
                                            </ul>
                                            <p name="ctn" id="ctn">'.$object->content.'</p>';
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
                                    </li>
                                    </form>
                                    ';
                                }
                            }
                        }
                    ?>
                    
                    
                        
                    </ul>                   
                </div><!--/Response-area-->
                <div class="replay-box">
                    <div class="row">
                        <div class="col-sm-8">
                        <?php 
                             $url = url('blog/'.$prog->url);
                            if (isset($user)){
                            echo '<form class="form-horizontal" role="form" method="POST" action="/postcmt">'.csrf_field().'

                                    <input type="hidden" name="nuserid" value="'.$user->id.'" />
                                    <input type="hidden" name="nprogid" value="'.$prog->id.'" />
                                            
                                    <h2>Leave a Comment    </h2>
                                    <div class="text-area">
                                        <div class="blank-arrow">
                                            <label>'.$user->name.'</label>
                                        </div>
                                        <span>*</span>
                                        <textarea name="content" rows="11"></textarea>
                                        <button class="btn btn-primary"  type="submit" name="cmt" id="cmt" >Post Comment</button>
                                    </div>
                                </form>';
                            }
                        ?>
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                </div><!--/Repaly Box-->
            </div>  
        </div>
    </div>
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