@extends("template")

@section("title")
	E-chauffage-pro | Mon Panier
@endsection


@section("page-content")
  	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Bois de chauffage</p>
						<h1>Votre Panier</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	{{--         @if(session('cart'))
            @foreach(session('cart') as $id => $details) --}}
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-{{ (session('cart') && count(session('cart')) > 0) ? 8 : 12 }} col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>

								@if (session('cart'))

								   @foreach (session('cart') as $articleCart)
										

										<tr class="table-body-row">
											<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
											<td class="product-image"><img src="{{ asset($articleCart['photo']  )}}" alt=""></td>
											<td class="product-name"> {{ $articleCart['name']  }}  </td>
											<td class="product-price"> {{ $articleCart['price'] }} </td>
											<td class="product-quantity"><input type="number" value="{{ $articleCart['quantity'] }}" placeholder="0"></td>
											<td class="product-total"> {{ $articleCart['quantity']  * $articleCart['price']   }}    </td>
										</tr>
							
									 @endforeach

									 @else
									 	<tr class="table-body-row">
											<td colspan="6"> Votre panier est vide pour le moment.  
												<a href=" {{Route('shop')}}" class="text-primary"> Commencer vos achats ici </a>
											</td>
										</tr>
								@endif


							</tbody>
						</table>
					</div>
				</div>

	
				@if (session('cart') && count(session('cart')) > 0)
				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Sous-Total: </strong></td>
									<td> {{ $total }} </td>
								</tr>
								<tr class="total-data">
									<td><strong>Remise: </strong></td>
									<td> {{ $remise }} %  </td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td> {{$total - ($total * ($remise/100))  }}  </td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href=" {{ Route('shop') }} " class="boxed-btn">Update Cart</a>
							<a href="{{ Route('checkout') }}" class="boxed-btn black">Check Out</a>
						</div>
					</div>

				</div>

				@endif

			</div>
		</div>
	</div>
	<!-- end cart -->
@endsection