@extends("template")

@section('title') 
  Bois de chauffage | Accueil
@endsection

@section("page-content")


	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2">
					<div class="hero-text">
						<div class="hero-text-tablecell ">
							<p class="subtitle">Bois de chauffage</p>
							<h1>Découvrez la qualité .. </h1>
							<div class="hero-btns">
								<a href="shop.html" class="boxed-btn">Voir la collection</a>
								<a href="contact.html" class="bordered-btn"> Contactez nous </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Achat facile</h3>
							<p>Jusqu'a 75% de remise</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>Support 24h/24</h3>
							<p>Tout les jours</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Remboursé</h3>
							<p>Satisfait ou remboursé</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Nos</span> Produits</h3>
						<p>Découvrez un gamme varié de bois de chauffage, Idéal pour vos cheminées et vos besoins</p>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($last_articles as $item )
					@include('partials.product-widget')
				@endforeach
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
		<section class="cart-banner pt-100 pb-100">
				<div class="container">
						<div class="row clearfix">
								<!--Image Column-->
								<div class="image-column col-lg-6">
										<div class="image">
												<div class="price-box">
														<div class="inner-price">
																	<span class="price">
																			<strong>30%</strong> <br> off per kg
																	</span>
															</div>
													</div>
												<img src="{{ $honnor_article->image_article }}" alt="">
											</div>
									</div>
									<!--Content Column-->
									<div class="content-column col-lg-6">
						<h3><span class="orange-text">L'affaire</span> du mois</h3>
											<h4>{{ $honnor_article->nom }}</h4>
											<div class="text">{{ $honnor_article->description }}</div>
											<!--Countdown Timer-->
											<div class="time-counter"><div class="time-countdown clearfix" data-countdown="2020/2/01"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
										<a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i>Add to Cart</a>
									</div>
							</div>
					</div>
		</section>
  <!-- end cart banner section -->
@endsection