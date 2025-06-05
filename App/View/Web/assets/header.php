<?php
session_start();
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
<!-- Header con logo e navigazione -->
<header class="bg-white p-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-6">
                <a class="navbar-brand" href="i#"><h3>Vinum Novum</h3></a>
            </div>
            <!-- Utente e Carrello -->
            <div class="col-md-6 col-6 text-end">
                <div class="header-icons">
                    <a href="index.php?url=utente/login" class="me-3"><i class="fas fa-user"></i></a>
                    <a href="index.php?url=carrello/index"" class="position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-burgundy">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu di navigazione principale -->
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
                        <li><a class="dropdown-item" href="">Rossi</a></li>
                        <li><a class="dropdown-item" href="">Bianchi</a></li>
                        <li><a class="dropdown-item" href="">Champagne</a></li>
                        <li><a class="dropdown-item" href="">Spumanti</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tutti i Vini</a>
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
