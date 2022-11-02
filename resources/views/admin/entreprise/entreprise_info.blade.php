@extends('admin.admin-template')
@section('contents')
<div class="container-fluid p-0">

    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Mon Entreprise</h1>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations sur l'entreprise</h5>
                </div>
                 <form action="{{ route('entreprise.update', ['entreprise'=> 1]) }}"  method="post">
                    @csrf()
                    @method('PUT')
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <label for="nom">Nom de l'entreprise</label>
                                <input type="text" name="nom" class="form-control" value="{{$entrepriseInfo->nom}}" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="nom">Adresse de l'entreprise</label>
                                <input type="text" name="addresse" class="form-control" required value="{{$entrepriseInfo->addresse}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <label for="nom">Heure d'ouverture</label>
                                <input type="text" class="form-control" required name="heure_ouverture" value="{{$entrepriseInfo->heure_ouverture}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="nom">Heure de fermerture</label>
                                <input type="text" name="heure_fermerture" class="form-control" required value="{{  $entrepriseInfo->heure_fermerture  }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-6">
                            <label for="nom">Email support de l'entreprise (Founit par l'hebergeur)</label>
                            <input type="email" name="email_support" class="form-control" required value="{{$entrepriseInfo->email_support}}">
                          </div>
    
                          <div class="col-lg-6">
                              <label for="nom">Telephone de l'entreprise</label>
                              <input type="text" name="telephone" class="form-control" required value="{{$entrepriseInfo->telephone}}">
                          </div>
                        </div>
  
                        <div class="row mb-3">
                            <div class="col-lg-2">
                                <input type="submit" class="btn btn-primary" value="Sauvegarder">
                            </div>
                        </div>
                    </div>
                
                
                 </form>
            </div>
        </div>

    </div>

</div>   
@endsection