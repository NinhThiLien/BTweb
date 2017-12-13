@extends('layouts.layout')

@section('content') 
<section id="advertisement">
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        @if (count($data['progs']))
                    @foreach ($data['progs'] as $post)
                    <?php 
                                    $owner = DB::table('users')->where('id', $post->idowner)->first();
                                ?>
                    <div id="content">
            <div class="container">

                <div class="col-sm-9" id="blog-listing">

                    <div class="post">
                        <h2><a href="post.html">{{$post->title}}</a></h2>
                        <p class="author-category">By <a href="#">{{$owner->name}}</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="post.html"><i class="fa fa-calendar-o"></i>{{ $post->created_at}}</a>
                        </p>
                        <div class="image">
                            <a href="post.html">
                                <img src="images/blog/{{$post->image}}" style="background: 100%" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">{{str_limit($post->content, 600)}}</p>
                        <p class="read-more"><a href="{{url('blog/'.$post->url)}} class="btn btn-primary">Read more</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
                    @endforeach
                    @endif
                    <div class="pagination-area">
                        <ul class="pagination">
                            {!! $data['progs']->render() !!}
                        </ul>
                    </div>
    </div>
        </div>
    </div>
</section>
@endsection