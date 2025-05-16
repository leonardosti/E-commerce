<?php
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinum Novum</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Il tuo file CSS personalizzato -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php">Vinum Novum</a>

        <!-- Login/Registrazione visibili su desktop -->
        <div class="d-none d-lg-flex gap-2">
            <a href="login.php" class="btn btn-outline-light btn-sm">Login</a>
            <a href="register.php" class="btn btn-light btn-sm">Registrati</a>
        </div>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu mobile + link navigazione -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
            </ul>

            <!-- Login/Registrazione su mobile -->
            <div class="d-lg-none mt-3 text-center">
                <a href="login.php" class="btn btn-outline-light btn-sm me-2">Login</a>
                <a href="register.php" class="btn btn-light btn-sm">Registrati</a>
            </div>
        </div>
    </div>
</nav>
