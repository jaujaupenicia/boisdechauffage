<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Commandez vos bois de chafaage">
    <meta name="author" content="jaujaupenicia">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Bois de chauffage | Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @vite(["resources/js/admin.js"])

</head>

<body>
    <div class="wrapper">
     @include('admin.partials.sidebar')

        <div class="main">
			@include('admin.partials.navbar')

            <main class="content">
                @yield('contents')
            </main>

			@include('admin.partials.footer')
        </div>
    </div>


    <script>

        $('#datatable').DataTable( {
            responsive: true
        } );
    
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
        var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Previous month\">&laquo;</span>",
            nextArrow: "<span title=\"Next month\">&raquo;</span>",
            defaultDate: defaultDate
        });
    });
    </script>

</body>

</html>