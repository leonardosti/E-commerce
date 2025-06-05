<?php
?>
    <head>
        <title>Register</title>
    </head>
<?php include 'assets/header.php' ?>

    <!-- Form Registrazione -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-primary">Registrati a Vinum Novum</h2>
                            <p class="text-muted">Inserisci le tue informazioni per registrarti al sistema</p>
                        </div>
                        <form method="POST" action="">
                            <?= $controller->form($attributi);?>
                            <button type="submit" class="btn btn-primary w-100 py-2">
                                <i class="fas fa-sign-in-alt me-2"></i>Registrati
                            </button>
                        </form>

                        <div class="text-center mt-4">
                            <p class="mb-0">Hai gia' un account? <a href="index.php?url=utente/login" class="text-primary">Accedi</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'assets/footer.php' ?>