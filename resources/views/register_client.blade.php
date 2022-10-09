<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> E-chauffage-pro | Login  </title>
</head>
@vite('resources/js/authenticator.js')
<body>
  <div class="container-main">
    <div class="left-side"></div>
    <div class="right-side">
      
      <div class="right-content">
        <div class="web-title">
          <h4>E-chauffage-pro | Connection </h4>
          <small>Creer votre espace et démarrer vos achats !</small>
       </div>


       <x-auth-session-status class="mb-4" :status="session('status')" />

  
       <div class="form-content">
        <div class="contact-form">
          <form method="POST" action="{{ Route('register') }}">
            @csrf()
            <p>
              <input type="text" placeholder="Entrez votre nom" name="nom" required>
              <input type="text" placeholder="Entrer votre prenom" name="prenom" required>
            </p>

            <p>
              <input type="email" placeholder="Entrez votre email" name="email" required style="width: 100%">
            </p>

            <p>
              <input type="password" placeholder="Entrez votre mot de passe" name="password" required>
              <input type="password" placeholder="Confirmer le mot de passe" name="password_confirmation" autocomplete="current-password" required>
            </p>
          
            <p><input type="submit" value="Creer mon compte"></p>
          </form>
        </div>
       </div>
      </div>
    </div>
  </div>
</body>
</html>
