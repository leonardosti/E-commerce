<?php
session_start();
?>
    <head>
        <title>Login</title>
    </head>
<?php include 'assets/header.php'; ?>

    <!-- Form Accesso -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-primary">Accedi a Vinum Novum</h2>
                            <p class="text-muted">Inserisci le tue credenziali per accedere al sistema</p>
                        </div>
                        <form method="POST" action="">
                            <?= $controller->form($attributi);?>
                            <div class="mb-4 form-check">
                                <a href="#" class="float text-primary">Password dimenticata?</a>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2">
                                <i class="fas fa-sign-in-alt me-2"></i>Accedi
                            </button>
                        </form>

                        <div class="text-center mt-4">
                            <p class="mb-0">Non hai un account? <a href="index.php?url=utente/register" class="text-primary">Registrati</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'assets/footer.php'; ?>