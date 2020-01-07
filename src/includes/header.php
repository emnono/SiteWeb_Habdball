<header>

<?php session_start(); ?>
    <!-- vérifie si l'utilisateur de la session est admin ou rédacteur pour faire apparaître la navbar Admin -->
    <?php
    if ($_SESSION["admin"] == 1 || $_SESSION["redac"] == 1) {
        include('navbarAdmin.php');
    }
    ?>

        <!-- navbar visiteur lambda -->
        <nav id="navbarVisiteur" class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
            <a class="navbar-brand" href="../body/home.php">
                <img class="img img-fluid logo-navbar" src="../../resources/img/logo.png" alt="logo du club">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2"
                aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../body/home.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Actualités</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Club
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Historique</a>
                            <a class="dropdown-item" href="#">Organigrame</a>
                            <a class="dropdown-item" href="#">Sponsors</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Résultats
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../body/club.php">Club</a>
                            <a class="dropdown-item" href="../body/equipe_liste.php">Equipes</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../body/galerie.php">Galeries</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Nous contacter</a>
                            <a class="dropdown-item" href="#">à propos</a>
                            <a class="dropdown-item" href="../body/login.php">Accès administration</a>
                        </div>
                    </li>
            </div>
        </nav>

    </div>
    <!-- Permet de créer un espace "derrière" la navbar pour que le body ne soit pas caché -->
    <div id="spaceheader">
    </div>
</header>