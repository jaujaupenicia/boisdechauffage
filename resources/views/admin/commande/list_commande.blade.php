@extends('admin.admin-template') @section('contents')
<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Liste des commandes</h1>
    </div>

    <div class="card">
        <div class="card-header pb-0">
   
            <h5 class="card-title mb-0">Mes Commandes</h5>
        </div>
        <div class="card-body">
            <div id="datatables-orders_wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatables-orders" class="table table-striped dataTable no-footer dtr-inline collapsed" >
                            <thead>
                              <tr>
                                <th>Identifiant</th>
                                <th class="d-none d-xl-table-cell">Date commande</th>
                                <th class="d-none d-xl-table-cell">Adresse Livraison</th>
                                <th class="d-none d-md-table-cell">Clients (email)</th>
                                <th>Status de la commande</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                 @if ($commandes)
                                     
                                   @foreach ($commandes as $item)

                                    <tr class="odd">
                                        <td class="dtr-control sorting_1">
                                            <strong>{{ $item->identifiant_cmd  }}</strong>
                                        </td>
                                        <td>{{ $item->date_commande  }}</td>
                                        <td>{{ $item->addresse_livraison  }}</td>
                                        <td>{{ $item->client->email   }}</td>
                                        <td><span class="badge bg-success">commande passée</span></td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">View</a>
                                            <a href="#"  class="btn btn-warning btn-sm">Edit</a>
                                        </td>
                                    </tr>

                                   @endforeach
                                 @else
                                    <tr class="odd">
                                        <td colspan="7" class="dtr-control sorting_1">
                                        Aucune Commandes pour le moments
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
