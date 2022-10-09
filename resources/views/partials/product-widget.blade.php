<div class="col-lg-4 col-md-6 text-center berry">
  <div class="single-product-item">
    <div class="product-image">
      <a href="{{ Route('detail.produit', $item->id) }}">
        <img src="{{ Storage::url($item->image_article)}}" alt="{{ $item->image_article }}">
      </a>
    </div>
    <h3>{{ $item->nom }}</h3>
    <p class="product-price">
    <span> 
      
    </span> 
    

      @if ($item->en_promo)
       <del> {{ $item->prix }} € </del>
       {{ $item->prix_promo  }} €
       @else
       {{ $item->prix }} €
      @endif
      

  
  </p>

    <form method="POST" action="{{Route('panier')}}">
      @csrf
      <input type="hidden" id="id" name="id" value="{{ $item->id }}">
      <input id="quantity" name="quantity" type="number" value="1" min="1" style="display: none">
      <button class="cart-btn"><i class="fas fa-shopping-cart"></i>Panier</button>
    </form>

  </div>
</div>
