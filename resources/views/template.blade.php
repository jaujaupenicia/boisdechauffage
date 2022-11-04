<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Votre espace pour vos bois de chauffage">
	<title> @yield('title') </title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
  @include("partials.header-search")
  @yield("page-content")
  @include("partials.footer-copyright")
	@vite([
		"resources/js/app.js",
		"resources/js/jquery.countdown.js",
		"resources/js/jquery.meanmenu.min.js",
		"resources/js/main.js",
	])

</body>
</html>