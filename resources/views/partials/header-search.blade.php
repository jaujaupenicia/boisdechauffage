	
  	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends--> 
		
  <!-- header -->
  <div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								{{-- <img src="assets/img/logo.png" alt=""> --}}
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="{{ Route("home") }}">Accueil</a></li>
								<li><a href="{{ Route("shop") }}">Boutique</a></li>
								<li><a href="{{ Route("faq") }}">FAQ</a></li>
								<li><a href="{{ Route("contact") }}">Contact</a></li>
								@if (!Auth::user())
								<li><a href="{{ Route("login") }} ">Se connecter</a></li>
								@endif
								{{-- <li><a href="#" data-toggle="modal" data-target="#connecter">se connecter </a></li> --}}
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="{{ Route("panier.index") }}">
											<i class="fas fa-shopping-cart"></i>
											<span class=" badge badge-danger"> 
												@if (session('cart'))
												    {{ count(session('cart') ) }}
														@else
												    0
												@endif
											</span>
										</a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										@if (Auth::user())
										 <form method="POST" action="{{ Route("logout")  }}" style="display: inline">
											 @csrf()
												<button style="background: transparent; border:none; color: white"> 
													<i class="fas fa-user"></i>
												</button>
											</form>
										@endif
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#">
							<i class="fas fa-search"></i>
						</a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
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
	<!-- end search area -->