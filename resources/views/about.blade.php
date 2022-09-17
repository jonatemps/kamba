@extends('master')

@section('content')
<h6 hidden>{{$active2='active'}}</h6>
<h6 hidden>{{$page='about-banner'}}</h6>

	<!-- a-about -->
	<div class="a-grid">
		<div class="container">
			<div class="w3l-about-heading">
				<h2>A propos <span>de nous</span></h2>
			</div>
			<div class="agileits-a-about-grids">
				<div class="col-md-5 agileits-a-about-left">
					<img src="images/logo.jpg" alt="" />
				</div>
				<div class="col-md-7 agileits-a-about-right">
					<h3>Un petit mot à propos de nous</h3>
					<h4>Notre objet social est celui d'améliorer les conditions de vie des congolais par l'organisation des activités visant à leur rendre autonômes et responsabless pour l'émergence de notre très cher pays le RDC sur le plan social, économique, sanitaire, culturel et autre.</h4>
					<h3>La fondation à pour objectif:</h3>
                    {{-- <p>Fusce tincidunt vitae purus in interdum. Sed mattis erat vitae nunc dignissim, a facilisis elit porta. Nam a dui id magna tempus tempor. Mauris vel nunc nec ante semper facilisis a sit amet dolor. Aliquam viverra ex felis, consequat condimentum augue ultrices vel. Pellentesque sed nibh ac diam tempor fringilla sit amet a tortor. Praesent sodales sapien turpis.
						<span>Maecenas vestibulum rhoncus rhoncus. Pellentesque ullamcorper consectetur elit sit amet rhoncus. Maecenas lobortis est vel odio volutpat laoreet. Praesent pharetra interdum lorem, eleifend ullamcorper sapien mattis efficitur. Phasellus sed nisi ultrices, sodales enim non, ullamcorper sapien. Nullam mollis tempus mauris in vulputate.</span>
					</p> --}}
                    <ul>
                        <li><p>Ellébore et exécuter des Project de développements dans plusieurs domaine d’éducation, d’agriculture, de santé et social ;</p></li>
                        <li><p>Lutter contre l’insécurité alimentaire par la promotion de l’agriculture ;</p></li>
                        <li><p>Créer des supers marchés à grand échelle aux normes international sur toute l’étendue de la RDC ;</p></li>
                        <li><p>Combattre l’alphabétisation et tous les autres déficits dans le domaine éducatif;</p></li>
                        <li><p>Lutter contre le désœuvrement et les antivaleurs flamant parmi la jeunesse et épanouir celle-ci par tous moyens légaux de développements ;</p></li>
                        {{-- <li><p>Élément</p></li>
                        <li><p>Élément</p></li> --}}
                        </ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //a-about -->
	<!---728x90--->

	<!-- different -->
	<div class="jarallax different">
		<div class="container">
			<div class="w3-different-heading">
				<h3>Pourquoi sommes-nous <span>different</span></h3>
				<p>Congolais, nous considerons l'impacte de nos actions dans le processus du developpement de notre pays.</p>
			</div>
			<div class="w3agile-different-info">
				<p>Nous sommes convaincus que, seules des actions efficaces et dynamiques menée avec un esprit de sérénité peuvent contribuer de manière substantielle à l’amélioration des conditions de vie de la population. Réaffirmant notre engagement de s’organiser afin de soutenir les différents efforts et stratégies mis en place pour le compte de l’amélioration du social des congolais.</p>
				<div class="w3agile-button">
					<a href="/">Acceuil</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //different -->
	<!---728x90--->

	<!-- team -->
	<div class="team">
		<div class="container">
			<div class="agileinfo-team-heading">
				<h3>Notre <span>Equipe</span></h3>
			</div>
			<div class="team-grids">
				@foreach ($members as $member)

                <div class="col-md-3 col-xs-6 agileinfo-team-grid">
					<img src="{{$member->avatar}}" alt="" />
					<div class="captn">
						<h4>{{$member->name}}</h4>
						<p>{{$member->fonction}} </p>
						<div class="w3l-social">
							<ul>
								<li><a {{$member->facebook ? "href='$member->facebook'" : ''}} ><i class="fa fa-facebook"></i></a></li>
								<li><a {{$member->twitter ? "href='$member->twitter'" : ''}}><i class="fa fa-twitter"></i></a></li>
								<li><a href='mailto:{{$member->email ?? ''}}'><i class="fa fa-google"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

                @endforeach

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->


@endsection
