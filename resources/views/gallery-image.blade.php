@extends('master')

@section('content')
<h6 hidden>{{$active3='active'}}</h6>
<h6 hidden>{{$page='about-banner'}}</h6>

    <div class="about-heading">
        <div class="container">
            <h2>Gallery</h2>
        </div>
    </div>
    <!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="gallery-grids">
				@foreach ($images as $image)

                <div class="col-md-4 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="{{$image->image}}" data-lightbox="example-set" data-title="">
								<img src="{{$image->image}}" alt="{{$image->title}}" />
								<figcaption>
									<h3><span>{{$image->title}}</span></h3>
									<p> {{$image->description}}</p>
								</figcaption>
							</a>
						</figure>
					</div>
				</div>

                @endforeach

			</div>
		</div>
	</div>
	<!-- //gallery -->
	<!---728x90--->
@endsection
