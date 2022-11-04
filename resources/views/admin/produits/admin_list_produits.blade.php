@extends('admin.admin-template') @section('contents')
<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Liste des articles</h1>
    </div>

    <div class="card">
        <div class="card-header pb-0">
   
            <h5 class="card-title mb-0">Mes Produits</h5>
        </div>
        <div class="card-body">
            <div
                id="datatables-orders_wrapper"
                class="dataTables_wrapper dt-bootstrap5 no-footer"
            >
                <div class="row">
                    <div class="col-sm-12">
                        <table id="#datatable"
                            class="table table-striped dataTable no-footer dtr-inline collapsed" >
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc">
                                        #
                                    </th>
                                    <th class="sorting">
                                        Nom Produit
                                    </th>
                                    <th class="sorting" >
                                        Prix (Reel)
                                    </th>
                                    <th class="sorting">
                                        En promo
                                    </th>
                                    <th class="sorting">
                                        Hors Promos
                                    </th>
                                    <th class="sorting dtr-hidden" >
                                        Stock disponible
                                    </th>
                                    <th class="sorting_disabled dtr-hidden" >
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                 @if ($produits)
                                     
                                   @foreach ($produits as $item)

                                <tr class="odd">
                                    <td class="dtr-control sorting_1">
                                        <strong>{{ $item->id }}</strong>
                                    </td>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->prix }} XOF</td>
                                    <td>
                                        @if ($item->en_promo)
                                             <span class="badge badge-success-light bg-primary">Oui</span>
                                         @else
                                            <span class="badge badge-danger bg-danger">Non</span>
                                        @endif
                                    </td>

                                    <td>{{ $item->prix_promo }} XOF</td>
                                    <td>{{ $item->stock_dispo }}</td>

                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">Détail</a>
                                        <a href="{{ route('article.edit', ['article'=> $item->id]) }} "  class="btn btn-warning btn-sm">Editer</a>
                                    </td>
                                </tr>

                                   @endforeach
                                 @else
                                    <tr class="odd">
                                        <td colspan="7" class="dtr-control sorting_1">
                                        Aucun articles pour le moments
                                        </td>
                                    </tr>
                                 @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
