@extends('master')

@section('content')
<h6 hidden>{{$active4='active'}}</h6>
<h6 hidden>{{$page='about-banner'}}</h6>


<div class="about-heading">
    <div class="container">
        <h2>{{__("Unique Article")}}</h2>
    </div>
</div>
<!-- blog -->
<div class="blog">
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="agile-blog-grids">
            <div class="col-md-8 agile-blog-grid-left">
                <div class="agile-blog-grid">
                    <div class="agile-blog-grid-left-img">
                        <a href="{{route('post',$post->id)}}"><img src="{{$post->image}}" alt="" /></a>
                    </div>
                    <div class="blog-left-grids">
                        <div class="blog-left-left">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                        <div class="blog-left-right">
                            <div class="blog-left-right-top">
                                <h4>{{$post->title}}</h4>
                                <p>{{__("Posté Par")}} <a href="#">{{$post->user->name}}</a> &nbsp;&nbsp; {{$post->formatDate()}} &nbsp;&nbsp; <a href="">Commentaires ({{$post->comments->count()}})</a></p>
                            </div>
                            <div class="blog-left-right-bottom">
                                {!! nl2br($post->content) !!}
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!---728x90--->

                    <div class="response">
                            <h3>{{__("Commentaire")}}</h3>
                            @foreach ($post->comments as $comment)
                                <div class="media response-info">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img class="media-object" src="images/t3.jpg" alt="">
                                        </a>
                                        <h5><a href="#">{{$comment->name}}</a></h5>
                                    </div>
                                    <div class="media-body response-text-right">
                                        <p>{{$comment->content}}</p>
                                        <ul>
                                            <li>{{$comment->formatDate()}}</li>
                                            {{-- <li><a href="single.html">Reply</a></li> --}}
                                        </ul>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            @endforeach
                            {{-- <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/t1.jpg" alt="">
                                    </a>
                                    <h5><a href="#">Admin</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>June 21, 2016</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>
                                    <div class="media response-info">
                                        <div class="media-left response-text-left">
                                            <a href="#">
                                                <img class="media-object" src="images/t2.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Admin</a></h5>
                                        </div>
                                        <div class="media-body response-text-right">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <ul>
                                                <li>June 21, 2016</li>
                                                <li><a href="single.html">Reply</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div> --}}

                    </div>
                    <!---728x90--->

                    <div class="opinion">
                        <h3>{{__("Déposez votre commentaire")}}</h3>
                        <form action="{{route('comment.send',[$post->id])}}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="{{__("Nom")}}" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <textarea name="content" placeholder="Message" required=""></textarea>
                            <input type="submit" value="{{__("Envoyer")}}">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 agile-blog-grid-right">
                <div class="categories">
                    <h3>{{__("Récents")}}</h3>
                    <ul>

                        @foreach ($posts as $post)
                            <li><a href="#">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                {{-- <div class="categories">
                    <h3>Archive</h3>
                    <ul class="marked-list offs1">
                        <li><a href="#">May 2016 (7)</a></li>
                        <li><a href="#">April 2016 (11)</a></li>
                        <li><a href="#">March 2016 (12)</a></li>
                        <li><a href="#">February 2016 (14)</a> </li>
                        <li><a href="#">January 2016 (10)</a></li>
                        <li><a href="#">December 2016 (12)</a></li>
                        <li><a href="#">November 2016 (8)</a></li>
                        <li><a href="#">October 2016 (7)</a> </li>
                        <li><a href="#">September 2016 (8)</a></li>
                        <li><a href="#">August 2016 (6)</a></li>
                    </ul>
                </div> --}}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //blog -->

@endsection
