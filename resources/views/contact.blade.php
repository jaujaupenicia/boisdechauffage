@extends("template")


@section('title') 
  Bois de chauffage | Contact
@endsection


@section("page-content")
  <!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="breadcrumb-text">
          <p>Support 24/7 </p>
          <h1>Contactez nous</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end breadcrumb section -->

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="form-title">
          <h2>Avez vous des questions ?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
        </div>
         <div id="form_status"></div>
        <div class="contact-form">
          <form method="POST" action="backend/actioncontact.php">
            <p>
              <input type="text" placeholder="Nom" name="nom" id="name">
              <input type="email" placeholder="Email" name="email" id="email">
            </p>
            <p>
              <input type="tel" placeholder="telephone" name="telephone" id="phone">
              <input type="text" placeholder="objet" name="objet" id="subject">
            </p>
            <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
            <input type="hidden" name="token" name="token" value="FsWga4&@f6aw" />
            <p><input type="submit" name="envoyer" value="envoyer"></p>
          </form>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="contact-form-wrap">
          <div class="contact-form-box">
            <h4><i class="fas fa-map"></i> Adresse de la boutique </h4>
            <p>{{$entrepriseInfos->addresse}}</p>
          </div>
          <div class="contact-form-box">
            <h4><i class="far fa-clock"></i> Nos Horaires </h4>
            <p>MON - FRIDAY: {{$entrepriseInfos->heure_ouverture}}  - {{$entrepriseInfos->heure_fermerture}}</p>
          </div>
          <div class="contact-form-box">
            <h4><i class="fas fa-address-book"></i>Coordonnées</h4>
            <p>Telephone: {{$entrepriseInfos->telephone}} <br> Email: {{$entrepriseInfos->email_support}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end contact form -->

@endsection