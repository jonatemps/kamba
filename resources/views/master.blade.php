
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Fondation Kamba - Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Harvest Life Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link
        href="{{asset('logo.jpg')}}"
        id="favicon"
        rel="icon"
    >
<!-- bootstrap-css -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="http://fonts.googleapis.com/css?family=Playball&amp;subset=latin-ext" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<script src='{{asset('../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')}}'></script><script src="../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
	<!-- banner -->
	@include('partials.navbar')
	<!-- //banner -->
	<!---728x90--->
    @yield('content')

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>A propos</h3>
					<p>Déterminé à jouer un rôle de premier plan et de mettre notre intelligence au service de la nation congolaise en vue de promouvoir son développement.</p>
				</div>
				{{-- <div class="col-md-3 w3-agile-footer-grid">
					<h3>Evénements</h3>
					<ul>
						<li>12th Aug <a href="">Curabitur</a></li>
						<li>10th Sept <a href="">Fusce urna</a></li>
						<li>24th Sept <a href="">Praesent</a></li>
						<li>17th Oct <a href="">Malesuada </a></li>
						<li>09th Dec <a href="">Cum sociis</a></li>
					</ul>
				</div> --}}
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Navigation</h3>
					<ul>
						<li class="text"><a href="about">A propos</a></li>
						<li class="text"><a href="gallery">Gallery</a></li>
						<li class="text"><a href="posts">Blog</a></li>
						<li class="text"><a href="contact">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Newsletter</h3>
					<form action="{{route('newsletter.submit')}}" method="post">
                        @csrf
						<input type="email" id="mc4wp_email" name="email" placeholder="Entrez votre adress email" required="">
						<input type="submit" value="Souscrire">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
            <p class="small m-n">
                © Copyright {{date('Y')}} <a href="mailto:mupene7@gmail.com" target="_blank">"Fondation Kamba"</a><br>
                Propulsé Par  <a href="mailto:mupene7@gmail.com" target="_blank">"Jonathan Mupene"</a>
            </p>
			<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="{{asset('js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- parallax -->
	<script src="{{asset('js/jarallax.js')}}"></script>
	<script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
	<!-- //parallax -->
</body>
</html>
