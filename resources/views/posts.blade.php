@extends('master')


@section('content')
<h6 hidden>{{$active4='active'}}</h6>
<h6 hidden>{{$page='about-banner'}}</h6>

<div class="about-heading">
    <div class="container">
        <h2>Blog</h2>
    </div>
</div>
<!-- blog -->
<div class="blog">
    <div class="container">
        <div class="agile-blog-grids">
            <div class="col-md-8 agile-blog-grid-left">

               @foreach ($posts as $post)

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
                                <h4><a href="{{route('post',$post->id)}}">{{$post->title}}</a></h4>
                                <p>Posté Par <a href="#">{{$post->user->name}}</a> &nbsp;&nbsp; {{$post->formatDate()}} &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
                            </div>
                            <div class="blog-left-right-bottom">
                                <p>{!! nl2br(substr($post->content,0,150)) !!}</p>
                                <a href="{{route('post',$post->id)}}">Plus</a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            <!---728x90--->

               @endforeach

                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4 agile-blog-grid-right">
                <div class="categories">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#">Phasellus sem leo, interdum quis risus</a></li>
                        <li><a href="#">Nullam egestas nisi id malesuada aliquet </a></li>
                        <li><a href="#"> Donec condimentum purus urna venenatis</a></li>
                        <li><a href="#">Ut congue, nisl id tincidunt lobor mollis</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis</a></li>
                        <li><a href="#">Suspendisse nec magna id ex pretium</a></li>
                    </ul>
                </div>
                <div class="categories">
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
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //blog -->
@endsection
