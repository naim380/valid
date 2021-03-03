<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LEGACY CAR</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

<div class="header">
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Legacy car</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("home")}}">accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("produits")}}">catalogue <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("formulaire")}}">vendre ma voiture <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <img src="porsche.jpg" class="img-fluid voiture de collection" alt="bannière sombre">
</header>
</div>


@yield("content")

<footer class="page-footer font-small blue pt-4 footer">

    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <h5 class="text-uppercase">Plus d'infos</h5>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase"><a href="contact.html">nous contacter</a>
                </h5>
                <ul class="list-unstyled">
                    <li>
                        <img src="email.png" alt="icone mail" class="icon"><a
                            href="mailto:legacy-car@legacycar.com">legacycar@gmail.com</a>
                    </li>
                    <li>
                        <a href="#!"><img src="phone-call.png" alt="icon tel" class="icon"> 07.77.77.77.77</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">nous suivre</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!"><img src="facebook.png" alt="icon facebook" class="icon"></a>
                    </li>
                    <li>
                        <a href="#!"><img src="twitter.png" alt="icon twitter" class="icon"></a>
                    </li>
                    <li>
                        <a href="#!"><img src="instagram.png" alt="icon insta" class="icon"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <p>Legacy Car</p>
    </div>
</footer>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>


</html>

