@extends('admin.admin-template')
@section('contents')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3"><strong>Tableau</strong> de bord</h1>

    <div class="row">
        <div class="col-xl-6 col-xxl-5 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Ventes</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="truck"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">2.382</h1>
                                <div class="mb-0">
                                    <span class="text-danger"> <i
                                            class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                    <span class="text-muted">Semaine dernière</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Visiteurs</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">14.212</h1>
                                <div class="mb-0">
                                    <span class="text-success"> <i
                                            class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                                    <span class="text-muted">Semaine dernière</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Gains</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">$21.300</h1>
                                <div class="mb-0">
                                    <span class="text-success"> <i
                                            class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                    <span class="text-muted">Semaine dernière</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Commandes</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">64</h1>
                                <div class="mb-0">
                                    <span class="text-danger"> <i
                                            class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                                    <span class="text-muted">Semaine dernière</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Calendrier</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="chart">
                            <div id="datetimepicker-dashboard"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">Dernières Commandes</h5>
                </div>
                <table class="table table-hover my-0">
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
                                <tr>
                                    <td>{{ $item->identifiant_cmd  }}</td>
                                    <td class="d-none d-xl-table-cell">{{ $item->date_commande  }}</td>
                                    <td class="d-none d-xl-table-cell">{{ $item->addresse_livraison  }}</td>
                                    <td class="d-none d-md-table-cell">{{ $item->client->email  }}</td>
                                    <td><span class="badge bg-success">commande passée</span></td>
                                    <td class="d-none d-md-table-cell">
                                        <a href="" class="btn btn-primary"> Lancer </a>
                                        <a href="" class="btn btn-danger"> Refuser </a>
                                    </td>
                                </tr>
                            @endforeach
                       @else

                        <tr>
                            <td colspan="5" class="text-center">Aucune commande pour l'instant</td>
                        </tr>
                           
                       @endif
        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection