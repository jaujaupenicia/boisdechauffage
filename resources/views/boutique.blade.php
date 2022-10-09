@extends("template")

@section('title') 
  Bois de chauffage | Boutique
@endsection

@section("page-content")
		<!-- breadcrumb-section -->
		<div class="breadcrumb-section breadcrumb-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="breadcrumb-text">
							<p>Bois de chauffage</p>
							<h1>Boutiques</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb section -->

		<!-- products -->
		<div class="product-section mt-80 mb-80">
			<div class="container">
				<div class="row product-lists">
					@foreach ($articles as $item)
						@include('partials.product-widget')
					@endforeach
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="pagination-wrap">
							<ul>
								<li><a href="{{ $articles->url($articles->currentPage() - 1) }}">Prev</a></li>

								@if ($articles->hasPages())
									@for ($i = 0; $i < ($articles->total() / $articles->perPage() ); $i++)
											@if ($articles->currentPage() == $articles->url($i + 1) )
												<li class="active"><a href="{{ $articles->url($i + 1) }}">{{$i + 1 }}</a></li>
											@else
												<li><a href=" {{ $articles->url($i + 1) }}  ">{{$i + 1 }}</a></li>
											@endif
									@endfor
						 		@endif

								<li><a href=" {{ $articles->url($articles->currentPage() + 1) }} ">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end products -->






@endsection