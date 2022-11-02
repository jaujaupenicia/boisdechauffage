<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />
	<title>E-chauffage-pro | Admin - Login </title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  @vite(["resources/js/admin.js"])
</head>

<body>
  <form action="{{ route('login') }}" method="POST">
    @csrf()
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <main class="d-flex w-100">
      <div class="container d-flex flex-column">
        <div class="row vh-100">
          <div class="col-sm-10 col-md-8 col-lg-5 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">
  
              <div class="text-center mt-4">
                <h1 class="h2">Bienvenue sur l'interface d'administration</h1>
                <p class="lead">
                  Connectez-vous pour continuer
                </p>
              </div>
  
              <div class="card">
                <div class="card-body">
                  <div class="m-sm-4">
                    <div class="text-center">
                    </div>
                    <form>
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control form-control-lg" type="email" name="email" :value="old('email')" required placeholder="admin@exemple.com" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input class="form-control form-control-lg" type="password"name="password" required placeholder="Enter votre mot de passe" />
                        <small>
                         <a href="#">Mot de passe oublié ?</a>
                        </small>
                      </div>
                      <div>
  
                      </div>
                      <div class="text-center mt-3">
                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button> 
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    
  </form>

</body>

</html>