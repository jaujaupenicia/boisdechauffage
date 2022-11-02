@extends('admin.admin-template')
@section('contents')
<div class="container-fluid p-0">

    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Produits</h1>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Creation de nouveau produit</h5>
                </div>
                 <form action=" {{ Route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf()

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <label for="nom"> Nom de l'article</label>
                                <input type="text" name="nom" class="form-control" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="nom"> Prix de l'article (hors promo)</label>
                                <input type="number" name="prix" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <label for="nom"> Image de l'article</label>
                                <input type="file" class="form-control" required name="photo">
                            </div>
                            <div class="col-lg-6">
                                <label for="nom"> Stock disponible de l'article</label>
                                <input type="number" name="stock_dispo" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <label for="nom"> L'article est-il en promo</label>
                                <select class="form-select mb-3" name="en_promo">
                                    <option selected>Choissisez un reponse</option>
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
            
                            </div>
    
                            <div class="col-lg-6">
                                <label for="nom">Prix de promo</label>
                                <input type="text" name="prix_promo" class="form-control" required >
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="nom">Entrer la description du produit</label>
                            <textarea class="form-control" required rows="2" name="description"></textarea>
    
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