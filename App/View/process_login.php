<?php
session_start();
require 'database/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Controlla se utente esiste
    $stmt = $pdo->prepare("SELECT * FROM utenti WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Login corretto
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];
        header("Location: index.php");
        exit();
    } else {
        // Login fallito
        header("Location: login.php?error=1");
        exit();
    }
}
?>

