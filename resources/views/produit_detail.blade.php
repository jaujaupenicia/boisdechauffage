@extends("template")


@section('title') 
  Bois de chauffage | Detail {{ $article->nom }}
@endsection


@section("page-content")
  	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Voir les détails</p>
						<h1> Fiche Produit </h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="{{ asset($article->image_article )}} " alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{{ $article->nom }}</h3>
						<p class="single-product-pricing"><span>en promo</span> {{ $article->prix }} € </p>
						<p>{{ $article->description }}</p>
						<div class="single-product-form">
						  <form method="POST" action="{{Route('panier')}}">
								@csrf
								<input type="hidden" id="id" name="id" value="{{ $article->id }}">
								<input id="quantity" name="quantity" type="number" value="1" min="1">
								<button class="cart-btn"><i class="fas fa-shopping-cart"></i>Panier</button>
							</form>
						</div>
						<h4>Partager:</h4>
						<ul class="product-share">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Produits</span> Similaires</h3>
						<p>Découvrier des variétés de bois de chauffage du méme genres à des prix abordables et défiant la concurrence</p>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($similars as $item)
					@include('partials.product-widget')
				@endforeach
			</div>
		</div>
	</div>
	<!-- end more products -->
@endsection