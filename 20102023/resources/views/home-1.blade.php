@extends('layouts.app', [
"title" => "Atelier HOSE - Atelier de Joaillerie",
])
@section('content')

<!-- Banner -->
<section class="banner-sect" style="background-image: url('images/banner.jpg');">
	<div class="container h-screen  mb-10">
		<div class="row g-4 h-screen md:items-center flex-wrap">
			<div class="md:w-10/12 w-full">
				<div class="banner-text">
					<div class="main-ttl bold title-font mb-3">NOS CRÉATIONS</div>
					<div class="sub-ttl mb-4 lg:mb-8">Joaillerie</div>
					<div class="row ">
						<div class="w-full md:w-7/12 hidden md:block">
							<div class="banner-btn btn-style grid grid-cols-2 gap-6">
								<div class="btn-block">
									<a href="" class="">
										<div class="icon-style"><img src="images/icons/i01.svg"></div>
										<span>Découvrir notre métier</span>
									</a>
								</div>
								<div class="btn-block">
									<a href="" class="">
										<div class="icon-style"><img src="images/icons/i02.svg"></div>
										<span>Découvrir nos créations</span>
									</a>
								</div>
								<div class="btn-block">
									<a href="" class="">
										<div class="icon-style"><img src="images/icons/i01.svg"></div>
										<span>Découvrir notre métier</span>
									</a>
								</div>
								<div class="btn-block">
									<a href="" class="">
										<div class="icon-style"><img src="images/icons/i02.svg"></div>
										<span>Découvrir nos créations</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="arrow-btn w-full text-center">
				<a href="#products" class="mx-auto"><svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" viewBox="0 0 448 512" width="30" height="30"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"/></svg></a>
			</div>
		</div>
	</div>
</section>

<!-- Welcome Section -->
<section id="products" class="products-sect py-16 text-white">
	<div class="container md:py-16">
		<div class="grid grid-cols-1 md:grid-cols-2 md:gap-16 gap-8">
			<div class="product-block">
				<div class="swiper product-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="product-img"><img src="images/p01.jpg"></div>
						</div>
						<div class="swiper-slide">
							<div class="product-img"><img src="images/p02.jpg"></div>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="product-ttl">Bague Forgée Mains en Or Gris Palladié & Saphir Bleu Peacock</div>
				<p>Lorsque qu’une magnifique pierre se suffit à elle même…</p>
			</div>
			<div class="product-block">
				<div class="swiper product-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="product-img"><img src="images/p02.jpg"></div>
						</div>
						<div class="swiper-slide">
							<div class="product-img"><img src="images/p01.jpg"></div>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="product-ttl">Bague Forgée Mains en Or Gris Palladié & Saphir Bleu Peacock</div>
				<p>Lorsque qu’une magnifique pierre se suffit à elle même…</p>
			</div>
			<div class="product-block">
				<div class="swiper product-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="product-img"><img src="images/p03.jpg"></div>
						</div>
						<div class="swiper-slide">
							<div class="product-img"><img src="images/p02.jpg"></div>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="product-ttl">Bague Forgée Mains en Or Gris Palladié & Saphir Bleu Peacock</div>
				<p>Lorsque qu’une magnifique pierre se suffit à elle même…</p>
			</div>
			<div class="product-block">
				<div class="swiper product-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="product-img"><img src="images/p04.jpg"></div>
						</div>
						<div class="swiper-slide">
							<div class="product-img"><img src="images/p05.jpg"></div>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="product-ttl">Bague Forgée Mains en Or Gris Palladié & Saphir Bleu Peacock</div>
				<p>Lorsque qu’une magnifique pierre se suffit à elle même…</p>
			</div>
		</div>
	</div>
</section>
@endsection