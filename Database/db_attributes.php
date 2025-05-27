<?php
return [
    'dns' => 'mysql:host=localhost;dbname=cantina',
    'username' => 'root',
    'password' => '',
    'options' => [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
];