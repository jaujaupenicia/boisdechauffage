@extends('admin.admin-template') @section('contents')
<div class="container-fluid p-0">
    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Liste des Clients</h1>
    </div>

    <div class="card">
        <div class="card-header pb-0">
   
            <h5 class="card-title mb-0">Mes Clients</h5>
        </div>
        <div class="card-body">
            <div id="datatables-orders_wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatables-orders" class="table table-striped dataTable no-footer dtr-inline collapsed" >
                            <thead>
                              <tr>
                                <th>Identifiant</th>
                                <th class="d-none d-xl-table-cell">Clients (Nom Prenom)</th>
                                <th class="d-none d-xl-table-cell">Email</th>
                                <th class="d-none d-md-table-cell">Télephone</th>
                                <th>Adresse de résidence</th>
                                <th class="d-none d-md-table-cell">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                                 @if ($clients)
                                     
                                   @foreach ($clients as $item)

                                    <tr class="odd">
                                        <td class="dtr-control sorting_1">
                                            <strong>{{ $item->id  }}</strong>
                                        </td>
                                        <td>{{ $item->nom  }} {{ $item->prenom  }}</td>
                                        <td>{{ $item->email  }}</td>
                                        <td>{{ $item->telephone  }}</td>
                                        <td>{{ $item->adresse  }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">Détails</a>
                                            <a href="#" class="btn btn-success btn-sm">Contactez</a>
                                            <a href="#"  class="btn btn-warning btn-sm">Edit</a>
                                        </td>
                                    </tr>

                                   @endforeach
                                 @else
                                    <tr class="odd">
                                        <td colspan="7" class="dtr-control sorting_1">
                                        Aucun Clients pour le moments
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
