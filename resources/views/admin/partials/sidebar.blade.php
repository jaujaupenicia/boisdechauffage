<nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">E-Chauffage-pro</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="{{ route('admin.dashboad') }} ">
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Tableau de bord</span>
                        </a>
                        
                    </li>

                    <li class="sidebar-item">
						<a data-bs-target="#products" data-bs-toggle="collapse" class="sidebar-link">
							<i class="align-middle" data-feather="user"></i>  
                            <span class="align-middle">Produits</span>
						</a>
                        
						<ul id="products" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
							<li class="sidebar-item">
                                <a href="{{ Route('article.create')  }}" class="sidebar-link" href="pages-settings.html">
							        <i class="align-middle" data-feather="minus"></i>  
                                    Nouveau Produits
                                </a>
                            </li>
							<li class="sidebar-item">
                                <a class="sidebar-link" href="{{ Route('admin.product.list')  }}">
                                    <i class="align-middle" data-feather="minus"></i>  
                                    Listes des produits 
                                </a>
                                
                            </li>
						</ul>
					</li>


                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.commande.list') }} ">
                            <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Commandes</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.client.list') }}">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Clients</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('entreprise.edit', ['entreprise'=> 1]) }} ">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Entreprises</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Paramètres
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-buttons.html">
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Outils</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-forms.html">
                            <i class="align-middle" data-feather="check-square"></i> <span
                                class="align-middle">Documentation</span>
                        </a>
                    </li>

                    

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-cards.html">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Statistiques</span>
                        </a>
                    </li>

                </ul>

            
            </div>
        </nav>