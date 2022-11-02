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
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="web-title">
          <h4>E-chauffage-pro | Connection </h4>
          <small>Entrer vos identifiants et démarrer vos achats !</small>
       </div>
  
       <div class="form-content">
        <div class="contact-form">
          <form method="POST" action="{{ Route('login') }}">
            @csrf()
            <p>
              <input type="email" placeholder="Entrez votre email" name="email" :value="old('email')" required>
              <input type="password" placeholder="Saississez votre mot de passe" name="password" required>
            </p>
            <p><input type="submit" value="se connecter">  <a href="{{ route('register') }}" style="margin-left: 10px"> vous n'avez pas de compte ? Créez-en un ici </a></p>
          </form> 
        </div>
       </div>
      </div>
    </div>
  </div>
</body>
</html>

