<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>MarmiWild!</title>
    {{--{% block stylesheets %}{% endblock %}--}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('build/style.css') }}">
</head>
<body>
<!-- NAVBAR -->

{{--{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('images/marmiwild_logo.png') }}" alt="" class="img-navbar">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="">Recettes<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Genres
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Entrée</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Plats</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Desserts</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto" style="margin-right: 15px;">
            <li class="nav-item dropdown">
                {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {% if membre.username is not empty %}
                    {{ membre.username }}
                    {% else %}
                    <p>Mon profil</p>
                    {% endif %}
                </a>--}}
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Déconnexion</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="rechercher un recette, un ingrédient" aria-label="Search" style="width: 400px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
    </div>
</nav>

{{--{% else %}--}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('images/marmiwild_logo.png') }}" alt="" class="img-navbar">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="">Recettes<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Genres
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Entrée</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Plats</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Desserts</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto" style="margin-right: 15px;">
            <li class="nav-item active">
                <a class="nav-link" href="">Inscription</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">Connexion</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="rechercher un recette, un ingrédient" aria-label="Search" style="width: 400px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
    </div>
</nav>
    {{--{% endif %}--}}

@yield ('contenu')


<script src="{{ asset('build/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</body>
</html>
