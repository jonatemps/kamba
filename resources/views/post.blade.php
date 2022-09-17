@extends('master')

@section('content')
<h6 hidden>{{$active4='active'}}</h6>
<h6 hidden>{{$page='about-banner'}}</h6>


<div class="about-heading">
    <div class="container">
        <h2>Blog Article</h2>
    </div>
</div>
<!-- blog -->
<div class="blog">
    <div class="container">
        <div class="agile-blog-grids">
            <div class="col-md-8 agile-blog-grid-left">
                <div class="agile-blog-grid">
                    <div class="agile-blog-grid-left-img">
                        <a href="single.html"><img src="images/g5.jpg" alt="" /></a>
                    </div>
                    <div class="blog-left-grids">
                        <div class="blog-left-left">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                        <div class="blog-left-right">
                            <div class="blog-left-right-top">
                                <h4>{{$post->title}}</h4>
                                <p>Posted By <a href="#">{{$post->user->name}}</a> &nbsp;&nbsp; {{$post->formatDate()}} &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
                            </div>
                            <div class="blog-left-right-bottom">
                                {!! nl2br($post->content) !!}
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!---728x90--->

                    <div class="response">
                            <h3>Responses</h3>
                            <div class="media response-info">
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
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/t3.jpg" alt="">
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
                    <!---728x90--->

                    <div class="opinion">
                        <h3>Leave Your Comment</h3>
                        <form action="#" method="post">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <textarea name="Message" placeholder="Message" required=""></textarea>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
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
