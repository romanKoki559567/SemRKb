<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="?c=products">KOKIshop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Topanky
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Adidas</a></li>
                        <li><a class="dropdown-item" href="#">Nike</a></li>
                        <li><a class="dropdown-item" href="#">Vans</a></li>
                        <li><a class="dropdown-item" href="#">Converse</a></li>
                        <li><a class="dropdown-item" href="#">DC</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Letne</a></li>
                        <li><a class="dropdown-item" href="#">Zimne</a></li>
                        <li><a class="dropdown-item" href="#">Prechodne</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Oblečenie
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Tričká</a></li>
                        <li><a class="dropdown-item" href="#">Mikiny</a></li>
                        <li><a class="dropdown-item" href="#">Nohavice</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Onas.html">O nás</a>
                </li>
            </ul>

            <?php if ($auth->isLogged()) { ?>
                <span class="navbar-text"><b><?= $auth->getLoggedUserName() ?></b></span>
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="?c=products&a=create">Vytvor produkt</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?c=auth&a=logout">Odhlásenie</a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?c=auth&a=login">Prihlásenie</a>
                    </li>

                </ul>
            <?php } ?>
            <div class="d-flex" role="search">

                <div>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <button class="btn brder" type="submit">Search</button>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>
