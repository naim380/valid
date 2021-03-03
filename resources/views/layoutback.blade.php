<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LEGACY CAR</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/legacycarslogo.jpg" alt="logo Legacy-cars"  height="60">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produits') }}">Acheter une voiture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('formulaire') }}">Vendre sa voiture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('panier') }}">Panier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backoffice') }}">BackOffice</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
<div class="container">

</div>
@yield('content')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
