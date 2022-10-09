@extends("template")

@section("title")
	E-chauffage-pro | Passer Commande
@endsection


@section("page-content")
  	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Boise de chauffage</p>
						<h1>Passer votre commande</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-80 mb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Information de commande
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form method="POST" action=" {{ Route('commande.store') }} ">
												@csrf
						        		<p><input type="text" placeholder="Name" name="nom" value=" {{ Auth::user()->nom  }}" readonly> </p>
						        		<p><input type="text" placeholder="Prenom" name="prenom" value=" {{ Auth::user()->prenom  }}" readonly> </p>
						        		<p><input type="email" placeholder="Email" name="email" value=" {{ Auth::user()->email  }}" readonly></p>
						        		<p><input type="text" placeholder="Address (Lieu de residence)" name="address" required></p>
						        		<p><input type="text" placeholder="Address de livraison" name="addressLivraison" required></p>
						        		<p><input type="tel" placeholder="Telephone (whatsapp de préference)" name="tel" required></p>
												<p><input type="submit" value="Lancer ma commande"></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details" style="width: 100%">
							<thead>
								<tr>
									<th>Détail de la commande </th>
									<th>Prix des articles </th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td> <b>Produits</b> </td>
									<td> <b>Total</b> </td>
								</tr>

								@if (session('cart') && count(session('cart')) > 0)
									@foreach (session('cart') as $articleCart)
										<tr>
											<td>{{$articleCart["name"]}}</td>
											<td>{{ $articleCart['price'] }} € </td>
										</tr>
									@endforeach
								@endif

							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td> <b>Sous-total</b> </td>
									<td> {{ $total }}  €</td>
								</tr>
								<tr>
									<td> <b>Remise</b> </td>
									<td> {{ $remise }} % </td>
								</tr>
								<tr>
									<td> <b>Total</b> </td>
									<td> {{$total - ($total * ($remise/100))  }} € </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

@endsection