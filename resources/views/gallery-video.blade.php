@extends('master')

@section('content')
<h6 hidden>{{$active3='active'}}</h6>
<h6 hidden>{{$page='about-banner'}}</h6>

    <div class="about-heading">
        <div class="container">
            <h2>{{__("Gallérie")}} {{__("Vidéos")}}</h2>
        </div>
    </div>
    <!-- gallery -->
	<div class="gallery">
		<div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
			<div class="gallery-grids">
                @foreach ($videos as $video)

                <div class="col-md-6 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<iframe width="500" height="320" src="{{$video->link}}"> </iframe>
								<figcaption>
									<h3>{{$video->title}} </h3>
									<p> {{$video->description}}</p>
								</figcaption>
						</figure>
					</div>
				</div>

                @endforeach


				<div class="clearfix"> </div>
                <div class="d-flex justify-content-center text-center">
                    {!! $videos->links() !!}
                </div>
			</div>
		</div>

	</div>
	<!-- //gallery -->
	<!---728x90--->
@endsection
