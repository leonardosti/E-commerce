<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$config = require __DIR__ . '/../../../../Config/config.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= $config['css']?>">
</head>
<body>

<!-- Header -->
<header class="bg-white p-4">
    <div class="container">
        <div class="row align-items-center">

            <!-- Logo -->
            <div class="col-md-6 col-6">
                <a class="navbar-brand" href="index.php">
                    <h3>Vinum Novum</h3>
                </a>
            </div>

            <!-- Carrello e area utente -->
            <div class="col-md-6 col-6 text-end">
                <div class="d-inline-block m-3">
                    <a href="index.php?url=carrello/index" class="position-relative text-dark">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-burgundy">0</span>
                    </a>
                </div>
                <div class="d-inline-block nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?url=utente/login">Accedi</a></li>
                        <li><a class="dropdown-item" href="index.php?url=utente/register">Registrati</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Profilo</a></li>
                        <li><a class="dropdown-item" href="#">Esci</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Menu di navigazione -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cantina
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?url=magazzino/rossi">Rossi</a></li>
                        <li><a class="dropdown-item" href="index.php?url=magazzino/bianchi">Bianchi</a></li>
                        <li><a class="dropdown-item" href="index.php?url=magazzino/champagne">Champagne</a></li>
                        <li><a class="dropdown-item" href="index.php?url=magazzino/spumanti">Spumanti</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?url=magazzino/index">Tutti i Vini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bundle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Questionario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Abbonamenti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
