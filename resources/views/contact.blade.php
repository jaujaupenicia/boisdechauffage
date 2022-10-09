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
            <h4><i class="fas fa-map"></i> Shop Address</h4>
            <p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
          </div>
          <div class="contact-form-box">
            <h4><i class="far fa-clock"></i> Shop Hours</h4>
            <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
          </div>
          <div class="contact-form-box">
            <h4><i class="fas fa-address-book"></i> Contact</h4>
            <p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end contact form -->

@endsection