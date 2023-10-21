@extends('layouts.app', [
   "title" => "Atelier HOSE - Atelier de Joaillerie",
])
@section('content')
<!-- Banner -->
<section class="banner-sect" style="background-image: url('images/banner.jpg');">
	<div class="container h-screen">
		<div class="row g-4 h-screen md:items-center">
			<div class="md:w-7/12 w-full">
				<div class="banner-text">
					<div class="main-ttl title-font mb-3">Atelier <span>HOSE</span></div>
					<div class="sub-ttl mb-4 lg:mb-8">Joaillerie</div>

					<div class="banner-btn grid grid-cols-2 md:grid-cols-3 gap-6">
						<div class="btn-block">
							<a href="" class="">
								<img src="images/icons/i01.svg">
								<span>Découvrir notre métier</span>
							</a>
						</div>
						<div class="btn-block">
							<a href="" class="">
								<img src="images/icons/i02.svg">
								<span>Découvrir nos créations</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Welcome Section -->
<section class="welcome-sect py-14 md:my-6 bg-primary-color text-white">
	<div class="row g-0 md:justify-center justify-end">
		<div class="w-10/12 md:w-6/12">
			<div class="welcome-img text-center"><img src="images/01.jpg" class="mx-auto w-full"></div>
		</div>
	</div>
	
	<div class="row g-0 second-row">
		<div class="w-10/12 md:w-6/12">
			<div class="welcome-img1"><img src="images/02.jpg" class="w-full"></div>
		</div>
		<div class="w-full md:w-5/12">
			<div class="section-title title-font"><h2>Joaillier est un métier de passionné conjuguant</h2></div>
		</div>
	</div>

	<div class="row g-0 third-row justify-center">
		<div class="md:w-6/12">
			<div class="section-title title-font big-font mb-8 bold"><h2>le design et l’artisanat.</h2></div>
			<div class="section-title light ml-10 md:ml-0"><h3>Il s’agit ici de travailler la matière brute, la respecter et la sublimer.<br/> Ni plus, ni moins.</h3></div>
		</div>
	</div>

	<div class="pince"><img src="images/saphir-pince.png"></div>
</section>


<!-- Video Section -->
<section class="video-sect text-center md:mb-16">
	<div class="video-sect-inner">
		<div class="section-title title-font bold"><h2>Lorem ipsum dolor</h2></div>

		<div class="video-block">
			<iframe width="100%" height="900" src="https://www.youtube.com/embed/TgXfV8lnBm8?si=E_cFnLs3DieybLoT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
	</div>
</section>

@endsection
