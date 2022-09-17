<div class="banner {{$page ?? ''}}">
    <div class="header">
        <div class="container">
            <div class="header-left">
                <div class="w3layouts-logo">
                    <h1>
                        <a href="/">Kamba <span><sup>Fondation</sup></span></a>
                    </h1>
                </div>
            </div>
            <div class="header-right">
                <div class="agileinfo-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>

                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Langue</span>
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="#">French</a></li>
                            <li><a href="#">English</a></li>
                        </ul>
                    </div>
                    
                    <select class="selectpicker" data-width="fit">
                        <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                        <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                    </select>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="top-nav">
                    <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a class="{{$active1 ?? ''}} list-border" href="/">Acceuil</a></li>
                                <li><a class="{{$active2 ?? ''}}" href="/about">A propos</a></li>
                                {{-- <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="hvr-bounce-to-bottom" href="icons.html">Icons</a></li>
                                        <li><a class="hvr-bounce-to-bottom" href="typography.html">Typography</a></li>
                                    </ul>
                                </li> --}}
                                <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom {{$active3 ?? ''}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="hvr-bounce-to-bottom" href="{{route('gallery.images')}}">Images</a></li>
                                        <li><a class="hvr-bounce-to-bottom" href="{{route('gallery.videos')}}">Vidéos</a></li>
                                    </ul>
                                </li>
                                <li><a class="{{$active4 ?? ''}}" href="{{route('posts')}}">Blog</a></li>
                                <li><a class="list-border1 {{$active5 ?? ''}}" href="{{route('contact')}}">Contact</a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                    </nav>
            </div>
        </div>
    </div>
</div>
