<?php
session_start();
?>
    <head>
        <title>Login</title>
    </head>
<?php include 'assets/header.php'; ?>

    <main class="container mt-5" style="max-width: 500px;">
        <h2 class="mb-4">Accedi al tuo account</h2>

        <?php
        // Mostra eventuale messaggio di errore (es. login fallito)
        if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger">Credenziali non valide. Riprova.</div>';
        }
        ?>

        <form action="process_login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email o username</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-dark w-100">Accedi</button>
        </form>

        <div class="mt-3 text-center">
            <p>Non hai un account? <a href="register.php">Registrati</a></p>
        </div>
    </main>

<?php include 'assets/footer.php'; ?>